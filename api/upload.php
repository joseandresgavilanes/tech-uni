<?php
header('Content-Type: text/html; charset=utf-8');

// Verificar se o método da requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se existe o elemento 'imagem' no array $_FILES
    if (isset($_FILES['imagem'])) {
        // Imprimir o array $_FILES['imagem']
        print_r($_FILES['imagem']);
        
        // Mover o ficheiro temporário para o diretório correto no servidor com o novo nome
        $target_dir = "images/";
        $target_file = $target_dir . "webcam.jpg";
        
        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $target_file)) {
            echo "O ficheiro foi movido com sucesso para " . $target_file;
        } else {
            echo "Desculpe, ocorreu um erro ao mover o ficheiro.";
        }
    } else {
        echo "Erro: Nenhuma imagem foi enviada.";
    }
} else {
    echo "Erro: Método de requisição inválido.";
}
?>
