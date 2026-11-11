<?php
  include_once '../config/database.php';

  header('Content-Type: application/json');
  $dados = json_decode(file_get_contents('php://input'), true);
  
  $stmt = $pdo->prepare('INSERT INTO chamados(nome_cliente, titulo_chamado, categoria_chamado, prioridade_chamado, descricao_chamado) VALUES(:nome_cliente, :titulo, :categoria, :prioridade, :descricao)');

  try{
  $stmt->execute([
  ':nome_cliente' => $dados['cliente'],
  ':titulo' => $dados['titulo'],
  ':categoria' => $dados['categoria'],
  ':prioridade' => $dados['prioridade'],
  ':descricao' => $dados['descricao'],
  ]);
  
  echo json_encode([
    'status' => 'sucesso'
    ]);

  } catch(Exception $e){
    echo json_encode([
      'status' => 'erro',
      'mensagem' => 'Erro ao adicionar chamado: ' . $e->getMessage()
    ]);

   
  }
  
?>