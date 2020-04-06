<?php
function Nom_prenom(string $str)
{
    $val = preg_match('/^[A-Z][a-z]{2,}$/',$str);
    return $val;
}

function adresse(string $str)
{
    $val = preg_match('/^[a-zA-Z ]{5,}/',$str);
    return $val;
}

function numeroCall($int)
{
    $val = preg_match('/^7[5-8]{1}[-,_]?[0-9]{3}[-,_]?[0-9]{2}[-,_]?[0-9]{2}/',$int);
    return $val;
}


function correcteur_espace(string $texte)
{
    $correction_espace=preg_replace('#[ ]+#',' ',$texte);
    $correction_apostrophe=preg_replace('#([ ]+\' | \'[ ])#','\'',$correction_espace);
    $correction_virgule=preg_replace('#([ ]+,)#',',',$correction_apostrophe);
    $correction_point_virgule=preg_replace('#([ ]+;)#',';',$correction_virgule);
    $correction_point=preg_replace('#([ ]+\.)#','.',$correction_point_virgule);
    $correction_point=preg_replace('#([0-9]+\.) | (\,[0-9]+)#','([0-9]+\.) |(\,[0-9])',$correction_point_virgule);
    
    return $correction_point;
}

function recuperateur_phrase(string $texte)
{
    preg_match_all('#[a-z]([^.!?]|([.][0-9]))*[.?!]#i' ,$texte,$phrases);
    $phrases = $phrases[0];
    return $phrases;
}

function Premiere_lettre_maj(string $texte)
{
    foreach ($texte as $val) {
        return ucfirst($val);
    }
}

?>