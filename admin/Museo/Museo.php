<?php

class Museo
{
    private $idmuseo;
    private $nombre;
    private $id_ciudad_fk; 
    
    function __construct($idmuseo, $nombre,$id_ciudad_fk ){

       $this->idmuseo = $idmuseo;
       $this->nombre = $nombre;
       $this->id_ciudad_fk = $id_ciudad_fk;   
     }
     
     // function __construct($idciudad,$nombre) {
     //   $this->idciudad = $idciudad;
     //   $this->nombre = $nombre;       
     // }

     // function __construct() {
     //      $this->idciudad = $idciudad;
     //   $this->nombre = $nombre;   
     // }
    
     function setIdMuseo($idmuseo){
       $this->idmuseo = $idmuseo;
     } 
     function getIdMuseo(){
       return $this->idmuseo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
     
     function setIdCiudad($id_ciudad_fk){
       $this->id_ciudad_fk =$id_ciudad_fk;
     } 

     function getIdCiudad(){
       return $this->id_ciudad_fk;
     } 
     
}

?> 
