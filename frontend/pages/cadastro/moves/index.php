<?php
    require('../../../components/topHeader.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../../../assets/geral.php">
    <title>Document</title>
  </head>
  <body>
    <section class="section_de_verificao_e_cadastro">
      <div class="admin">
          <div class="image-adm">
              <img src="" alt="">
          </div>
          <h1>Nome do usuário</h1>
          <button><p>Verificar Usuario</p></button>
          <button><p>Lista de Filmes</p></button>
          <button><p>Cadastrar Filme</p></button>
</section>

 <section class="section_main">
        <div class="div_escolher_img">
            <input style="width:20vw; margin-top:10%;" type="file" id="imagempizza" onchange="converterimagem()">
        </div>
        <div class="div_nome_do_filme">
            <h3>Nome do Filme:</h3>
            <input type="text" class="div_input_nome_do_filme">
        </div>
        <div class="div_duracao">
            <h3>Duração:</h3>
            <input type="text" class="div_input_duracao">
        </div>
        <div class="div_link_api">
            <h3>Link API:</h3>
            <input type="text" class="div_input_link_api">
        </div>
        
        </div>
        <div class="div_buttons">
            <div class="btn_cadastro">
                <button>
                    <span>Cadastrar</span>
                </button>
            </div>
            <div class="btn_cancelar">
            <button >
                <span>Cancelar</span>
            </button>
            </div>
        </div>
    </section>
  </body>
</html>
