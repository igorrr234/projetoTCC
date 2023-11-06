<?php

include('../database/conexao.php');

$db = new Database();

class Usuario{
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function cadastrar($nome, $email, $senha, $confSenha)
    {
        if($senha == $confSenha){

            $emailExistente = $this->verificacaoEmailExistente($email);
            if($emailExistente){
                print "<script>alert('Email já cadastrado')</script>";
                return false;
            }
            
        $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO cadastro1 (nome, email, senha) VALUES (?, ?, ?)";
        
        $stmt = $this->conn->prepare($sql);
        $stmt -> bindValue(1, $nome);
        $stmt -> bindValue(2, $email);
        $stmt -> bindValue(3, $senhaCriptografada);
        $result = $stmt -> execute();

        return $result;

        }else{
            return false;
        }
    }

    private function verificacaoEmailExistente($email){
        $sql = "SELECT COUNT(*) from cadastro1 WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }


    public function recuperarSenha($email, $nome){
        $sql = "SELECT * FROM cadastro1 WHERE email = :email and nome = :nome";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':nome', $nome);
        $stmt->execute();

    

    if($stmt->rowCount() == 1){
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if(($usuario && $usuario['email'] === $email) && ($usuario && $usuario['nome'] === $nome)){
            return true;
        }
    }
    }

    function validarSenha($senha) {
        $comprimentoMinimo = 8;
        $padraoCaracteresEspeciais = '/[!@#$%^&*()_+\-=\[\]{};:\'"\\|,.<>\/?]/';
        $padraoLetrasMinusculas = '/[a-z]/';
    
        if (
            strlen($senha) < $comprimentoMinimo ||
            !preg_match($padraoCaracteresEspeciais, $senha) ||
            !preg_match($padraoLetrasMinusculas, $senha)
        ) {
            return false; 
        }
    
        return true;
    }
    

    public function logar($nome, $senha){
        $sql = "SELECT * FROM cadastro1 WHERE  nome = :nome ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nome', $nome);
        $stmt->execute();

    

    if($stmt->rowCount() == 1){
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($senha,$usuario['senha'])){
            return true;
        }
    }
    }
    

}
?>