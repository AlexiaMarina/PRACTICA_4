<?php 
class Usuari {
    public $nom;
    public $cognom;
    public $email;
    public $user;
    public $passwd; 

public function __construct ($nom, $cognom, $email, $user, $passwd){
    $this->nom = $nom;
    $this->cognom = $cognom;
    $this->email = $email; 
    $this->user = $user;
    $this->passwd = $passwd;    
}

public function createOneUser($user, $password, $nom, $cognom, $email)
{
    $passwordHashed = hashPassword($password);
    $query = "INSERT INTO usuari (user, passwd, nom, cognom, email) VALUES ('$user', '$passwordHashed', '$nom', '$cognom', '$email' )";
    return $query;
}
function getNom(){
    return $this->nom;
}
function getCognom(){
    return $this->cognom;
}
function getEmail(){
    return $this->email;
}
function getUser(){
    return $this->user;
}
function getPasswd(){
    return $this->passwd;
}
function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}
function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}

}
?>