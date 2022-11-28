<?php


require_once("config.php");

class Conexion {
    public $host;
    public $user;
    public $passwd;
    public $dbname;
    public $conexion; 

public function __construct ($host, $user, $passwd, $dbname){
    $this->host = $host;
    $this->user = $user;
    $this->passwd = $passwd;
    $this->dbname = $dbname;
}

public function CrearConn(){
    $this->conexion = new mysqli($this->host,$this->user,$this->passwd,$this->dbname);
    return $this->conexion;
}

}

	// $query = "SELECT * FROM usuari WHERE user = '$user'";
    // $result = $conn->query($query);
    // return $result->fetch();



// function createOneUser($conn, $user, $password, $nom, $cognom, $email)
// {
//     $passwordHashed = hashPassword($password);
//     $query = "INSERT INTO usuari (user, passwd, nom, cognom, email) VALUES ('$user', '$passwordHashed', '$nom', '$cognom', '$email' )";
//     $result = $conn->query($query);
//     // if ($result) {
//     //     return searchUser($conn, $user);
//     // }
//     // return false;
// }



function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}
function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}



?>


