<?php
require_once 'director-api.php';
require_once 'movie-api.php';

 
//  $meth= strtoupper($_SERVER['REQUEST_METHOD']) ;
//  $adata= $_POST['adata'];
//  $table= $_POST['table'];

    switch('movies'){
        case 'movies':
        $m=new MovieApi;
        $movie=$m->manager('DELETE',array('id'=>'3','name'=>"armegedon",'d_id'=>"5"));
        echo $movie['name'];
        break;
        case 'directors':
        $m=new DirectorApi;
        $movie= $m->manager($meth,$adata);
        echo gettype($movie);
        break;
     

}
?>