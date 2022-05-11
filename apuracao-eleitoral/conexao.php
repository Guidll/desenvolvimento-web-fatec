<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'apuracao-eleitoral';

$bdConexao = new mysqli($dbHost,$dbUser,$dbPassword,$dbName);

// if ($conexao->connect_errno) {
//     echo "ERRO";
// } else {
//     echo "Conexão com o BD efetuada";
// }
?>