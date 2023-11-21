<?php
require('../../../components/topHeader.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../assets/geral.php">
    <title>Tela de Cadastro</title>
</head>

<body>

    <?php
    echo $topHeader;
    ?>
    <section class="section_main">
        <div class="div_escolher_img">
            <input style="width:20vw; margin-top:10%;" type="file" id="imagempizza" onchange="converterimagem()">
        </div>
        <div class="div_nome_user">
            <h3>Nome:</h3>
            <input type="text" class="div_input_nome">
        </div>
        <div class="div_email_user">
            <h3>E-mail:</h3>
            <input type="text" class="div_input_email">
        </div>
        <div class="div_senha_user">
            <h3>Senha:</h3>
            <input type="password" class="div_input_senha">
        </div>
        <div class="div_senha_confirmar_user">
            <h3>Confirmar Senha:</h3>
            <input type="password" class="div_input_confirmar_senha">
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