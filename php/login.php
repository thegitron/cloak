<?php
$email = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost','usuario','senha','cloak')
           or die("Não foi possível conectar-se ao servidor!");
if(isset($entrar)) {
  $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
  $verifica = mysqli_query($connect,$query)
              or die("Erro ao selecionar!");
     if(mysqli_num_rows($verifica) <= 0) {
       echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='../html/login.html';</script>";
       die();
     }else{
       setcookie("email",$email);
       header("location:../index.php");
     }
}
?>
