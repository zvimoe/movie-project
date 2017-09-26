<?php

require_once 'director-api.php';
require_once 'movie-api.php';

 
  $meth= strtoupper($_SERVER['REQUEST_METHOD']);
  $adata = isset( $_REQUEST['adata']);
  $table = $_REQUEST['table'];
   echo 'adata';
   die();

  
    switch($table){
        case 'movies':
        $m=new MovieApi;
        $movie=$m->manager($meth,array('id'=>'3','name'=>"armegedon",'d_id'=>"5"));
        echo $movie['name'];
        break;
        case 'directors':
        $m=new DirectorApi;
        $directors= $m->manager($meth,$adata);
        foreach($stmt as $row){
           echo $row['name'].' '.$row['d_id'];
        }
        
        break;
    };
     


?>