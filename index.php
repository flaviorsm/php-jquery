<!DOCTYPE html>
<!--
    Cliente    : Chocotata - Tamara Lima
    Empresa    : Teia Soluções Digitais
    Template   : W3layouts
    Programador: Flávio Moreira
    Data       : 01/11/2015
-->
<html>
    <?php
    include './app/config.php';
    include './app/detect.php';
    include './head.php';
    ?>
    <body>
        <?php
        include './header.php';
        if ($page_name === '') {
            include './content/principal.html';
        }elseif ($page_name === 'principal.html') {
            include './content/principal.html';
        } elseif ($page_name === 'sobre.html') {
            include './content/sobre.html';
        } elseif ($page_name === 'servicos.html') {
            include './content/servicos.html';
        } elseif ($page_name === 'produtos.html') {
            include './content/produtos.html';
        } elseif ($page_name === 'contato.html') {
            include './content/contato.html';
        }elseif($page_name === "contact-post.html"){
            include './content/contato.html';
            include './app/contact.php';
        }else {
            include './content/404.html';
        }
        include './footer.php';
        ?>        
    </body>
</html>
