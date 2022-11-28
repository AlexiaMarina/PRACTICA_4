
<?php
require_once 'config.php';
require_once 'database.php';

$conn = new Conexion ($host,$user, $passwd, $dbname);
$conn =$conn->CrearConn();

$user = (isset($_POST['user'])) ? $_POST['user'] : "";
$password = (isset($_POST['passwd'])) ? $_POST['passwd'] : "";

$query = "SELECT * FROM usuari WHERE user = '$user'";
$UserExisting = $conn->query($query);

if ($UserExisting -> num_rows > 0) {
    session_start();
    if ($row = $UserExisting -> fetch_assoc()){
        $passwordHashed = $row['passwd'];
        $passwordCorrect = password_verify($password, $passwordHashed);
        
    // 
    // if ($passwordCorrect ) {
        // session_start();
        // if($row = $UserExisting -> fetch_assoc()){
        //     $_SESSION['usuario'] = $UserExisting;
        //     $_SESSION['nom'] = $row['nom'];
        //     $_SESSION['cognom'] = $row['cognom'];
        //     $_SESSION['email'] = $row['email'];
            header("Location:cv.php");
        }
    }
    // $passwordHashed = $UserExisting['passwd'];
    // else{
    //     header("Location:index.php?error=contrasenaincorrecta");
    // }
// }
else {
    
    header("Location:index.php?error=elusuarionoexiste");
}
    







