<?php
 
    class connection{
    private $server = 'localhost';
    private $database = 'portafolio';
    private $user = 'root';
    private $password = 'Cxu2013';

    private $connection;


    public function __construct(){
        try {
            $this->connection = new PDO("mysql:host=$this->server;dbname=$this->database",$this->user, $this->password);  //* Credentiales for DB
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //! Activa las excepciones y errores al conectar a la DB
        }catch(PDOException $e) {
            echo 'Failed connection' .$e;
        }
        
    }


    public function execSentences($sql){
        $this->connection->exec($sql);
        return $this->connection->lastInsertId();
    }
    public function executeSentences($sql){
        $sentence =$this->connection->prepare($sql);
        $sentence->execute();
        return $res = $sentence->fetchAll();
    }
        
    }
    
    
 
 ?>