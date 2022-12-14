<?php 

require_once 'dao/dao.php'; 

function listeDesVins(){

$listeDesVins = getArticles(); 

return $listeDesVins; 
var_dump($listeDesVins);

};