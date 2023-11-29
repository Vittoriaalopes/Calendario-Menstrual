//login
<?php 

include 'conexao.php';


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM usuarios WHERE (username = '$username' OR email='$email')";

    $result =mysqli_query($conn,$sql);

    if($result){
    
    $row= mysqli_fetch_assoc($result);

    if($row && password_verify($password,$row['password'])){
        echo "Login bem-sucedido!";
    }else{
        echo "Erro na consulta".mysqli_error($conn);
    }

    } 
    
}
mysqli_close($conn);
?>