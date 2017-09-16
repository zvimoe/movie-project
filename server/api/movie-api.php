<?php
  
  require_once "abstract-api.php";
  require_once "../controllers/movie-controller.php";
  require_once "../models/movie-model.php";

  class MovieApi extends Api{

      function create($params){
          $m = new MovieModel(0,$params['name'], $params['d_id']);
          $mc = new MovieController;
          return $mc->create($m);
      }
      function select($params){
          $m = new MovieModel($params['id'],"","");
          $mc = new MovieController;
          return $mc->select($m);
      }
      function update($params){
          $m = new MovieModel($params['id'],$params['name'], $params['d_id']);
          $mc = new MovieController;
          return $mc->update($m);
      }
      function delete($params){
          $m = new MovieModel($params['id'],"","");
          $mc = new MovieController;
          return $mc->delete($m);
      }
    }
    ?>