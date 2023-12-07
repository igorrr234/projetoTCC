<?php

include('../database/conexao.php');

$db = new Database();

class Usuario
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function cadastrar($nome, $email, $senha, $confSenha)
    {
        if ($senha == $confSenha) {

            $emailExistente = $this->verificacaoEmailExistente($email);
            if ($emailExistente) {
                print "<script>alert('Email já cadastrado')</script>";
                return false;
            }

            $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

            $sql = "INSERT INTO cadastro (nome, email, senha) VALUES (?, ?, ?)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $nome);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $senhaCriptografada);
            $result = $stmt->execute();

            return $result;
        } else {
            return false;
        }
    }

    private function verificacaoEmailExistente($email)
    {
        $sql = "SELECT COUNT(*) from cadastro WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }


    public function validarSenha($senha)
    {
        $comprimentoMinimo = 8;
    
        if (
            strlen($senha) < $comprimentoMinimo ||
            !preg_match('/[a-z]/', $senha) ||
            !preg_match('/[A-Z]/', $senha) || 
            !preg_match('/\d/', $senha) ||
            !preg_match('/[!@#$%^&*()_+\-=\[\]{};:\'"\\|,.<>\/?]/', $senha) 
        ) {
            return false;
        }
    
        return true;
    }


    public function logar($login, $senha)
    {
        $sql = "SELECT * FROM cadastro WHERE  nome = :nome OR email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nome', $login);
        $stmt->bindValue(':email', $login);
        $stmt->execute();



        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($senha, $usuario['senha'])) {
                return true;
            }
        }
    }
}

class Usuario2
{

    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    private function verificacaoFormExistente($nome,$email, $assunto)
    {
        $sql = "SELECT COUNT(*) FROM contato WHERE nome = ? AND email = ? AND assunto = ?";
        $stmt = $this->conn->prepare($sql);



        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $assunto);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }


    public function formContato($nome, $email, $assunto, $mensagem)
    {


        $formExistente = $this->verificacaoFormExistente($nome,$email, $assunto);

        if ($formExistente) {
            print "<script>alert('Um formlário deste mesmo assunto já foi enviado!')</script>";
            return false;
        }else{
        
        $sql = "INSERT INTO contato (nome, email, assunto, mensagem) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $assunto);
        $stmt->bindValue(4, $mensagem);
        $result = $stmt->execute();
        return $result;
    }
}
}
