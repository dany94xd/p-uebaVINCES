<?php

include_once('Museo.php');
include_once('../Collector.php');

class MuseoCollector extends Collector
{
  
function showMuseos() {
   $rows = self::$db->getRows("SELECT * FROM museo");       
   $arrayMuseo= array();        
    foreach ($rows as $c){
      $aux = new Museo($c{'idmuseo'},$c{'nombre'},$c{'id_ciudad_fk'});
      array_push($arrayMuseo, $aux);
    }
    return $arrayMuseo;        
  }

function showMuseo($id) {
$rows = self::$db->getRows("SELECT * FROM museo where idmuseo= ? ", array ("{$id}"));        
$ObjMuseo= new Museo($rows[0]{'idmuseo'},$rows[0]{'nombre'},$rows[0]{'id_ciudad_fk'});
  return $ObjMuseo;        
}


function insertMuseo($nombre,$id_ciudad_fk) {
  $rows = self::$db->insertRow("INSERT INTO public.museo(nombre,id_ciudad_fk) VALUES (?,?)", array ("{$nombre}","{$id_ciudad_fk}"));             
}


function deleteMuseo($id) {
  $deleterow = self::$db->deleteRow("DELETE FROM public.museo where idmuseo= ? ", array ("{$id}"));
}

}

?>

