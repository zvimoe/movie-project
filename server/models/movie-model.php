<?php  
    require_once "abstract-model.php";
   class MovieModel extends model{
       private $d_id;
       public function __construct($id,$name,$d_id){
           $this->id=$id;
           $this->name=$name;
           $this->d_id=$d_id;
       }
       public function getparams(){
        
      $params=array(
          'id' =>$this->id,
          'name' =>$this->name,
          'd_id' => $this->d_id
        
       );
       return $params;

    }
}
   ?>