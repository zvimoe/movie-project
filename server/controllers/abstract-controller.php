<?php
require_once "../common/bl.php";
require_once "../common/dal.php";

 abstract class Controller{
         public function create($model){
            $data=$model->getparams();
            $bl=new BLL;
            $query=$bl->Cquerybuilder($data,$this->tb);
            $dl=new Conn();
            $dl->insert($query[0],$query[1]);
        
          }
          public function select($model){
            $data=$model->getparams();
            $bl=new BLL;
            $query=$bl->Rquerybuilder($data[$this->indecator],$this->indecator,$this->tb);
            $dl=new Conn;
            return $dl->select($query[0],$query[1]);
          }
         public function update($model){
            $data=$model->getparams();
            $bl=new BLL;
            $query=$bl->Uquerybuilder($data,$data[$this->indecator],$indecator,$this->tb);
            $dl=new Conn;
            $dl->update($query);
          }
          public function delete($model){
            $data=$model->getparams();
            $bl=new BLL;
            $query=$bl->Dquerybuilder($data[$this->indecator],$indecator,$this->tb);
            $dl=new Conn;
            $dl->delete($query,$this->tb);
       
           }
       
        
  


       

   

}
?>