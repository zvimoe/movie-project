 <?php

require_once 'director-api.php';
 require_once 'movie-api.php';

 
  $meth= strtoupper($_SERVER['REQUEST_METHOD']);
  $adata =  $_REQUEST['adata'];
  $table = $_REQUEST['table'];


  
    switch($table){
        case 'movies':
        $m=new MovieApi;
        $movie=$m->manager($meth,$adata);
        echo $movie['name'];
        break;
        case 'directors':
        $m=new DirectorApi;
        $stmt= $m->manager($meth,$adata);
        $directors = array();
        foreach($stmt as $row){
            array_push($directors,$row["name"]); 
          
        }
         echo json_encode($directors);
        break;
    }; 
   

?>