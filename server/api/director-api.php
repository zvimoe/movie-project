<?php

  require_once "abstract-api.php";
  require_once "../controllers/director-controller.php";
  require_once "../models/director-model.php";

  class DirectorApi extends Api{

      function create($params){
          $m = new DirectorModel($params['name']);
          $mc = new DirectorController;
          $mc->create($m);
          return "new director inserted";
      }
      function select($params){
          
          $m = new DirectorModel($params['id'],"");
          $mc = new DirectorController;
          return $mc->select($m);
      }
      function update($params){
          $m = new DirectorModel($params['id'],$params['name']);
          $mc = new DirectorController;
          return $mc->upadte($m);
      }
      function delete($params){
          $m = new DirectorModel($params['id']);
          $mc = new DirectorController;
          $mc->delete($m);
          return "director deleted";
      }
    }
    ?>
        
      
        }

  }