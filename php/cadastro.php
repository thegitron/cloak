<!-- cadastro.php - cloak -->
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost','usuario','senha','cloak');

$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];

if($email == "" || $email == NULL) {
  echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='../html/cadastro.html';</script>";
}else{
  if($logarray == $email) {
    echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='../html/cadastro.html';</script>";
    die();
  }else{
    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$senha')";
    $insert = mysqli_query($connect,$query);
    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../html/login.html'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../html/cadastro.html'</script>";
    }
  }
}
?>
