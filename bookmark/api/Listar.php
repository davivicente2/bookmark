<?php

include_once "Conectar.php"; // Certifique-se de que $dbcon é uma instância de mysqli

$sql_lista = "SELECT * FROM livros";
$stmt_lista = $dbcon->prepare($sql_lista);
$stmt_lista->execute();
$result = $stmt_lista->get_result();

$livros = array();

while ($dados = $result->fetch_assoc()) {
    $livros[] = array(
        "ID" => $dados['id'],
        "TITULO" => $dados['titulo'],
        "SITE" => $dados['site'],
        "DATA"=> $dados["data_adicionado"],
        "NOTA" => $dados['nota'],
        "STATUS" => $dados["status"]
    );
}

echo json_encode($livros);

?>
