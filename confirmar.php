<?php 

$conn = mysqli_connect("localhost","root","","logueo");


$usu = $_POST['usuario'];
$pass = $_POST['password'];

$query= "SELECT * FROM login where usuario='".$usu."' and password='".$pass."'";

$result= mysqli_query($conn,$query);
$cont=mysqli_num_rows($result);
if ($cont==1) {
    echo "usuario corecto";# code...
}else{
    echo "no se encontro este usuario";
}

?>