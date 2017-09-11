<?php
require_once 'director-api.php';
require_once 'movie-api.php';

 
//  $meth= strtoupper($_SERVER['REQUEST_METHOD']) ;
//  $adata= $_POST['adata'];
//  $table= $_POST['table'];

    switch('movies'){
        case 'movies':
        $m=new MovieApi;
        print_r ($m->manager('GET',array('id'=>'1','name'=>"armegedon",'d_id'=>"2")));
        break;
        case 'directors':
        $m=new DirectorApi;
        echo $m->manager($meth,$adata);
        break;
     

}