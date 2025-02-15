<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Questões</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Cadastro de Questões</h2>
        <form action="processa_questao.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Banca</label>
                <input type="text" name="banca" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Código</label>
                <input type="text" name="codigo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nome da Prova</label>
                <input type="text" name="nome_prova" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Área</label>
                <input type="text" name="area" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Subárea</label>
                <input type="text" name="subarea" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Temática Principal</label>
                <input type="text" name="tematica_principal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Eixo Tecnológico</label>
                <input type="text" name="eixo_tecnologico" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Enunciado</label>
                <textarea name="enunciado" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagem do Enunciado</label>
                <input type="file" name="imagem_enunciado" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Ano da Questão</label>
                <input type="number" name="ano_questao" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Dificuldade</label>
                <select name="dificuldade" class="form-control" required>
                    <option value="Fácil">Fácil</option>
                    <option value="Médio">Médio</option>
                    <option value="Difícil">Difícil</option>
                </select>
            </div>

            <?php 
                $alternativas = ['A', 'B', 'C', 'D', 'E'];
                foreach ($alternativas as $alt) {
                    echo "<div class='mb-3'>
                            <label class='form-label'>Alternativa $alt</label>
                            <input type='text' name='alternativa_$alt' class='form-control' required>
                          </div>";
                }
            ?>

            <div class="mb-3">
                <label class="form-label">Resposta Correta</label>
                <select name="resposta_certa" class="form-control" required>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Explicação da Resposta</label>
                <textarea name="explicacao_resposta" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Imagem da Explicação</label>
                <input type="file" name="imagem_explicacao" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Questão</button>
        </form>
    </div>
</body>
</html>
