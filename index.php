<?php

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = explode('/',$rota['path'],2);

function Rota($param)
{
    $rotas = array("contato", "empresa", "produtos", "servicos", "home");

    if(in_array($param[1],$rotas)):
        return $param[1].".php";
    elseif($param[1] == ''):
        return require_once("home.php");
    else:
        return require_once("404.php");
    endif;
}
?>

<!doctype html>
<html lang="pt-BR">
    <?php require_once('includes/header.php') ?>
<body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">
                <!-- .btn-navbar, esta classe é usada como alternador para o conteudo colapsável -->
                <button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Tudo que for escondilho a menos de 940px -->
                <div class="nav-collapse collapse">
                    <?php require_once ("includes/menu.php"); ?>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <?php require_once(Rota($path)); ?>
        </div>
    </section>

    <footer class="footer">
        <?php include_once('includes/footer.php'); ?>
    </footer>

</body>
</html>