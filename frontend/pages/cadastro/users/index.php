<?php
require('../../../components/topHeader.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../assets/geral.php">
    <title>Tela de Login</title>
</head>

<body>
    <?php
    echo $topHeader;
    ?>
    <section class="section_login">
        <div class="borda-users">
            <div class="img-users">
                <img src="" alt="">
            </div>
            <div class="email">
                <h1>E-mail</h1>
                <input class="borde-email-senha" type="text">
            </div>

            <div class="senha">
                <h1>Senha</h1>
                <input class="borde-email-senha" type="password">
            </div>

            <div class="button-entrada">
            </div>
            <div class="buton-esqueci-senha">
                <h1> Esqueci a Senha</h1>
            </div>

        </div>
    </section>
</body>

</html>