<?php 

include 'conexao.php';

//formulario
if($_SERVER["REQUEST_METHOD"]=="POST"){
$newUsername=$_POST ['newUsername'];
$newEmail=$_POST['newEmail'];
$newPassword=$_POST['newPassword'];



//inserir um novo usuário no banco de dados
$sql="INSERT INTO usuarios(username,email,password)VALUES('$newUsername','$newEmail','$newPassword')";

if($conn->query($sql)===TRUE){
    echo "Cadastro bem-sucedido!";
}else{
    echo "Erro ao cadastrar:".$conn->error;
}


}
$conn->close();


?>