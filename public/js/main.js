const formChamados = document.getElementById('formChamados');

if (formChamados) {
  formChamados.addEventListener('submit', async (e) => {
    e.preventDefault();

    const dados = {
      titulo: formChamados.elements.titulo.value,
      cliente: formChamados.elements.cliente.value,
      categoria: formChamados.elements.categoria.value,
      prioridade: formChamados.elements.prioridade.value,
      descricao: formChamados.elements.descricao.value
    };

    try {
      const response = await fetch('http://localhost:8080/criar.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(dados)
      });

      const data = await response.json();
      console.log(data);

      if (data.status === 'erro'){
        console.log(data.mensagem)
      } else{
        console.log(data.mensagem)
      }
    } catch (error) {
      console.error('Erro ao enviar chamado:', error);
    }
  });

  
}

