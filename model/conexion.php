<?php

class Conection {
    
    public $server="127.0.0.1:3306";
    public $db="peru";
    public $password="";
    public $usuario="root";
    

    function conectar(){
        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->usuario,$this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            return $conn;
        }
        catch(PDOException $error){
            echo $error->getMessage();
            return null;
        }
    }

    function sentencia($sql){
        try{
            $conn = $this->conectar();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_NUM);
            if($row != null){
                return $row;
            }
            else{
                return null;
            }
        }
        catch(Exception $e){
            echo "Error en sentencia ".$e->getMessage();
        }
    }

    function sentencia_unica($sql){
        try{
            $conn = $this->conectar();
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_NUM);
            if($row != null){
                return $row;
            }
            else{
                return null;
            }
            
        }
        catch(Exception $e){
            echo "Error en sentencia ".$e->getMessage();
        }
        
    }
    function ejecutar($sql){
        $conn = $this->conectar();
        $stmt = $conn->prepare($sql);
    }

}

?>