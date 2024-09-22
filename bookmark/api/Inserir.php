<?php

include 'Conectar.php';

$titulo = $_POST['titulo'];
$site = $_POST['site'];
$nota = $_POST['nota'];
$data_adicionado = $_POST['data_adicionado'];
$status = $_POST['status'];

// Converte o formato da data se necessário (opcional, remova se o formato estiver correto)
///$data_adicionado = DateTime::createFromFormat('d/m/Y', $data_adicionado)->format('Y-m-d');

// Consulta para inserir os dados no banco
$sql = $dbcon->query("INSERT INTO livros (titulo, site, nota, data_adicionado, status) VALUES ('$titulo', '$site', '$nota', '$data_adicionado', '$status')");

// Verificar se a inserção foi bem-sucedida
if($dbcon->affected_rows > 0){
    echo "inserido_ok"; // Registro inserido com sucesso
} else {
    echo "inserido_erro"; // Erro ao inserir
}

?>
