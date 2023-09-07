<h1> Serveur 1</h1>
<h4>Tentative de connexion MariaDB depuis PHP...</h4>
<?php
$host = 'mariadb1';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host,$user,$pass);

if($conn->connect_error){
        die("La connexion a echoue: " . $conn->connect_error);
}
echo "connexion reussie a mariaDB";
?>

