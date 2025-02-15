CREATE TABLE banco_questoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    banca VARCHAR(100) NOT NULL,
    codigo VARCHAR(50) NOT NULL UNIQUE,
    nome_prova VARCHAR(150) NOT NULL,
    area VARCHAR(100) NOT NULL,
    subarea VARCHAR(100),
    tematica_principal VARCHAR(150) NOT NULL,
    eixo_tecnologico VARCHAR(150),
    enunciado VARCHAR(65535) NOT NULL,
    imagem_enunciado LONGBLOB,  -- Armazena a imagem do enunciado
    ano_questao YEAR NOT NULL,
    dificuldade ENUM('Fácil', 'Médio', 'Difícil') NOT NULL,
    alternativa_a VARCHAR(65535) NOT NULL,
    alternativa_b VARCHAR(65535) NOT NULL,
    alternativa_c VARCHAR(65535) NOT NULL,
    alternativa_d VARCHAR(65535) NOT NULL,
    alternativa_e VARCHAR(65535) NOT NULL,
    resposta_certa CHAR(1) NOT NULL CHECK (resposta_certa IN ('A', 'B', 'C', 'D', 'E')),
    explicacao_resposta VARCHAR(65535),
    imagem_explicacao LONGBLOB,  -- Armazena a imagem da explicação
    autor VARCHAR(100),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
