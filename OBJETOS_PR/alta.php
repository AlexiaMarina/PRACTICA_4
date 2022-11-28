<?php
require_once 'config.php';
require_once 'database.php';
require_once 'usuari.php';

$conn = new Conexion ($host,$user, $passwd, $dbname);
$conn =$conn->CrearConn();

session_start();


$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$cognom = (isset($_POST['cognom'])) ? $_POST['cognom'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$user = (isset($_POST['user'])) ? $_POST['user'] : "";
$passwd = (isset($_POST['passwd'])) ? $_POST['passwd'] : "";
// ver si algun campo está  vacío
if (empty($nom) || empty($cognom) || empty($email) || empty($user) || empty($passwd)) {
    header("Location: registra.php?error=2");
    exit;
}

// $userExisting =  searchUser($conn, $user);

$query = "SELECT * FROM usuari WHERE user = '$user'";
    $UserExisting = $conn->query($query);

if ($UserExisting -> num_rows>0) {
    header("Location: registra.php?error=alreadyExists");
} else {
    $usuario= new Usuari($nom, $cognom, $email, $user, $passwd);
    $newUser = $usuario -> createOneUser($user, $passwd, $nom, $cognom, $email);
    $newUsuari = $conn->query($newUser);

    if ($newUsuari) {
        $_SESSION['usuario'] = $newUsuari;
        $_SESSION['nom']= $usuario -> getNom();
        $_SESSION['cognom']= $usuario -> getCognom();
        $_SESSION['email']= $usuario -> getEmail();
        $_SESSION['user']= $usuario -> getUser();
        $_SESSION['passwd']= $usuario -> getPasswd();
        header("Location: cv.php");
        //print_r($_SESSION['nom']);
    }else{
        header("Location: registra.php?error=problemCreating");
        exit;
    }
}
?>

