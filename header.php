<?php
$endereco = $_SERVER['REQUEST_URI'];

$texto = strrchr($endereco, "/");
$posicao = strpos($texto, ".html") - 1;
$posicao2 = strpos($texto, "/") + 1;

$resultado = substr($texto, $posicao2, $posicao);

$index = "";
$sobre = "";
$servicos = "";
$galeria = "";
$contato = "";

switch ($resultado) {
    case "principal":
        $index = "active";
        break;

    case "sobre":
        $sobre = "active";
        break;
    
    case "servicos":
        $servicos = "active";
        break;

    case "produtos":
        $galeria = "active";
        break;

    case "contato":
        $contato = "active";
        break;

    default:
        $index = "active";
        break;
}
?>
<div class="header">
    <div class="wrap">
        <div class="top-header">
            <div class="logo">
                <a href="principal.html"><img src="images/logo.png" title="logo" /></a>
            </div>
            <div class="social-icons">
                <ul>
                    <li><a href="https://www.facebook.com/Choco-Tata-272956519492297/?fref=ts"><img src="images/facebook.png" title="facebook" /></a></li>
                    <!--<li><a href="#"><img src="images/twitter.png" title="twitter" /></a></li>
                    <li><a href="#"><img src="images/google.png" title="google pluse" /></a></li>-->
                </ul>
            </div>
            <div class="clear"> </div>
        </div>
        <!---start-top-nav---->
        <div class="top-nav">
            <div class="top-nav-left">
                <ul>
                    <li class="<?php echo $index; ?>"><a href="principal.html">Home</a></li>
                    <li class="<?php echo $sobre; ?>"><a href="sobre.html">Sobre</a></li>
                    <li class="<?php echo $servicos; ?>"><a href="servicos.html">Serviços</a></li>
                    <li class="<?php echo $galeria; ?>"><a href="produtos.html">Produtos</a></li>
                    <li class="<?php echo $contato ?>"><a href="contato.html">Contato</a></li>
                </ul>
            </div>
            <div class="clear"></div>
            
        </div>
        <!---End-top-nav---->
    </div>
</div>
<!----End-header----->

