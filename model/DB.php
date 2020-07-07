<?php
 class  DB{

    private $username ;
    private $password;
    private $dsn;
    private $pdo;

    public function __construct($dsn ='mysql:host=localhost;dbname=gestionactivitesbancaire',$username ='root', $password =''){
        $this->username = $username;
        $this->password = $password;
        $this->dsn = $dsn;
    }

    private function getConnexion()
    {
        try {
            if($this->pdo ===null){
                $pdo = new PDO($this->dsn,$this->username,$this->password);
                // set the PDO error mode to exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo = $pdo;
                //var_dump('pdo initialiser');
            }
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
         //var_dump('pdo appellé ');
         return $this->pdo;
    }

    public function executeSelect($sql)
    {

         $res = $this->getConnexion()->query($sql);
         $datas = $res->fetchAll();
         
         return $datas;
    }

    public function executeInsert($sql)
    {
        $res= $this->getConnexion()->exec($sql);
        return $res;
    } 
 }

