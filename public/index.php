<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chamados</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="page-shell">
      <header class="topbar">
        <div class="brand-wrap">
          <div class="brand-icon">C</div>
          <div>
            <small>Dashboard</small>
            <h1>Chamados</h1>
          </div>
        </div>

        <div class="topbar-actions">
          <button class="btn btn-muted">Filtrar</button>
          <button class="btn btn-primary">Novo chamado</button>
        </div>
      </header>

      <main class="content-grid">
        <section class="panel form-panel">
          <div class="panel-header">
            <h2>Cadastrar chamado</h2>
          </div>

          <form id="formChamados"class="ticket-form">
            <div class="field-row">
              <label>
                <span>Título</span>
                <input name="titulo" type="text" placeholder="Digite o título" />
              </label>

              <label>
                <span>Cliente</span>
                <input name="cliente" type="text" placeholder="Nome do cliente" />
              </label>
            </div>

            <div class="field-row">
              <label>
                <span>Categoria</span>
                <select name="categoria">
                  <option value="">Selecione</option>
                  <option value="suporte">Suporte</option>
                  <option value="financeiro">Financeiro</option>
                  <option value="infra">Infraestrutura</option>
                </select>
              </label>

              <label>
                <span>Prioridade</span>
                <select name="prioridade">
                  <option value="">Selecione</option>
                  <option value="baixa">Baixa</option>
                  <option value="media">Média</option>
                  <option value="alta">Alta</option>
                </select>
              </label>
            </div>

            <label>
              <span>Descrição</span>
              <textarea name="descricao" rows="5" placeholder="Descreva o problema ou solicitação..."></textarea>
            </label>

            <div class="form-actions">
              <button type="button" class="btn btn-muted">Cancelar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
          </form>
        </section>

        <section class="panel table-panel">
          <div class="panel-header table-header">
            <h2>Lista de chamados</h2>
            <input type="search" placeholder="Buscar" class="search-input" />
          </div>

          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Título</th>
                  <th>Cliente</th>
                  <th>Prioridade</th>
                  <th>Status</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </section>
      </main>
    </div>
    <script src="../js/main.js"></script>
  </body>
</html>
