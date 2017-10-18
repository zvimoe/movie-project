 <?php

require_once 'director-api.php';
 require_once 'movie-api.php';

 
  $meth= strtoupper($_SERVER['REQUEST_METHOD']);
  if ($meth == 'PUT')
    {
        parse_str(file_get_contents("php://input"), $_PUT);

        foreach ($_PUT as $key => $value)
        {
            unset($_PUT[$key]);

            $_PUT[str_replace('amp;', '', $key)] = $value;
        }

        $_REQUEST = array_merge($_REQUEST, $_PUT);
    }
    $adata =  $_REQUEST['adata'];
    $table = $_REQUEST['table'];
    
    

    
  
    switch($table){
        case 'movies':
        echo $meth;
        $m=new MovieApi;
        $movie=$m->manager($meth,$adata);
        echo $meth;
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