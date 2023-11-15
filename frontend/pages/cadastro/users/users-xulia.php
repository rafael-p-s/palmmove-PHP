<?php
require("../../components/topHeader.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../assets/geral.php">
    <title>Document</title>
</head>

<body>
    <?php
    echo $topHeader;
    ?>
    <section class="section_admin_perfil">
        <div class="admin">
            <div class="image-user">
                <img src="" alt="">
            </div>
            <h1>Nome do usuário</h1>
            <button><p>Perfil do usuário</p></button>
            <button><p>Trocar senha</p></button>
            <button><p>Trocar imagem</p></button>
            <button><p>Trocar e-mail</p></button>
        </div>
    </section>
    
</body>

</html>