<?php
require 'config.php'; // Arquivo de conexão com o banco de dados

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Captura dos dados
        $banca = $_POST['banca'];
        $codigo = $_POST['codigo'];
        $nome_prova = $_POST['nome_prova'];
        $area = $_POST['area'];
        $subarea = $_POST['subarea'];
        $tematica_principal = $_POST['tematica_principal'];
        $eixo_tecnologico = $_POST['eixo_tecnologico'];
        $enunciado = $_POST['enunciado'];
        $ano_questao = $_POST['ano_questao'];
        $dificuldade = $_POST['dificuldade'];
        $resposta_certa = $_POST['resposta_certa'];
        $explicacao_resposta = $_POST['explicacao_resposta'];

        // Upload das imagens
        $imagem_enunciado = file_get_contents($_FILES['imagem_enunciado']['tmp_name']);
        $imagem_explicacao = file_get_contents($_FILES['imagem_explicacao']['tmp_name']);

        // Preparação e inserção no banco
        $sql = "INSERT INTO banco_questoes (banca, codigo, nome_prova, area, subarea, tematica_principal, eixo_tecnologico, enunciado, imagem_enunciado, ano_questao, dificuldade, alternativa_a, alternativa_b, alternativa_c, alternativa_d, alternativa_e, resposta_certa, explicacao_resposta, imagem_explicacao)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$banca, $codigo, $nome_prova, $area, $subarea, $tematica_principal, $eixo_tecnologico, $enunciado, $imagem_enunciado, $ano_questao, $dificuldade, $_POST['alternativa_A'], $_POST['alternativa_B'], $_POST['alternativa_C'], $_POST['alternativa_D'], $_POST['alternativa_E'], $resposta_certa, $explicacao_resposta, $imagem_explicacao]);

        echo "Questão cadastrada com sucesso!";
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
