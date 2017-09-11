<?php
 // connection to data base //
 class Conn{
        private $host = '127.0.0.1';
        private $db   = 'movies';
        private $user = 'root';
        private $pass = '';
        private $charset = 'utf8';
        private $dsn;
        private $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
       
        public function __construct() {
            $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        }
  


// get from adta base //

  public function select($quary,$exct){

            $pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
        
            $stmt = $pdo->prepare($quary);
            $stmt->execute($exct);
            $row=$stmt->fetch();
            return $row;
            }
    

 // add  or delete or update to the date base//

    public function insert($quary,$exct){

           $pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
         
            $stmt = $pdo->prepare($quary);
            $stmt->execute($exct);
                        
    }
     
    //get all //

    static function selectAll($quary,$stmt){

            
            $pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
        
            $stmt = $pdo->prepare($quary);
            $stmt->execute($exct);
            return $stmt;
      
        }
 }


?>
   