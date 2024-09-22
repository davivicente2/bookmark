<?php

    include 'Conectar.php';

    $id = $_POST['id'];  // Certifique-se de passar o ID do registro que deseja editar
    $titulo = $_POST['titulo'];
    $site = $_POST['site'];
    $nota = $_POST['nota'];
    $data_adicionado = $_POST['data_adicionado'];
    $status = $_POST['status'];

    // Consulta para atualizar o registro existente
    $sql = $dbcon->query("UPDATE livros SET titulo='$titulo', site='$site', nota='$nota', data_adicionado='$data_adicionado', status='$status' WHERE id='$id'");

    // Verificar se a edição foi bem-sucedida
    if($dbcon->affected_rows > 0){
        echo "editado_ok"; // Registro editado com sucesso
    } else {
        echo "editado_erro"; // Erro ao editar ou nenhum dado foi alterado
    }

?>
