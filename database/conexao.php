<?php
class Database{
    private $host = "localhost";
    private $db_name = "cadastro1";
    private $username = "root";
    private $senha = "";
    public $conn;

    public function Conexao(){
        $this->conn = null;
       try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->username,$this->senha);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException$e){
            echo "Erro na conexão:". $e->getMessage();
        }
        return $this->conn;
    }
}
