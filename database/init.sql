USE UsersCrudDB;

CREATE TABLE chamados(
  id_chamado INT AUTO_INCREMENT PRIMARY KEY,
  nome_cliente VARCHAR(100) NOT NULL,
  titulo_chamado VARCHAR(200) NOT NULL,
  categoria_chamado VARCHAR(100) NOT NULL,
  prioridade_chamado VARCHAR(100) NOT NULL,
  descricao_chamado VARCHAR(2000) NOT NULL
);