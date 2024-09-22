<?php

include_once "Conectar.php"; // Certifique-se de que $dbcon é uma instância de mysqli

// Recebendo o ID via POST
$id = $_POST['id'];  // Corrigido para capturar o ID do registro que deseja excluir

// Verificando se o ID foi enviado
if (isset($id) && is_numeric($id)) {
    // Consulta para excluir o registro existente
    $stmt = $dbcon->prepare("DELETE FROM livros WHERE id = ?");
    $stmt->bind_param("i", $id); // "i" indica que o parâmetro é um inteiro
    $stmt->execute();

    // Verificar se a exclusão foi bem-sucedida
    if ($stmt->affected_rows > 0) {
        echo "excluido_ok"; // Registro excluído com sucesso
    } else {
        echo "excluido_erro"; // Erro ao excluir ou registro não encontrado
    }

    $stmt->close(); // Fecha a instrução preparada
} else {
    echo "id_invalido"; // ID inválido ou não enviado
}

?>
