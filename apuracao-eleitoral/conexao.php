<?php
define('HOST', 'localhost');
define('USUARIO', 'gui');
define('SENHA','guidll');
define('DB','webfatec');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB)
or
die ('Não foi possivel conectar');

echo "A conexão foi efetuada com sucesso!";
// $servidor = 'localhost';
// $usuario = 'root';
// $senha = '';
// $banco = 'webfatec';
// $porta = '8080';
// 
// $conn = mysqli_connect($servidor, $usuario, $senha, $banco, $porta);

// if (!$conn) {    
//     die ('Não foi possível efetuar a conexão!' . mysqli_error());
// }
// echo "<div style=\"\"><span style=\"font-size:3rem;display:grid;height:100vh;place-content:center; text-align:center;color:hsl(255,0%,30%);background-color:hsl(255,0%,95%);\">A conexão foi efetuada com sucesso!</span></div>";
?>