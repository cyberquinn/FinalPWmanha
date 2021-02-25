<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';


$pg = isset($_GET['pg']);


if ($pg) {

    switch ($_GET['pg']) {
      


        case 'login':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'painel/paginas/acesso/login.php';
            include_once 'site/paginas/includes/footer.php';
            break;
        
        case 'dashboard':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
        
        case 'tabela-artigo':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/validar-artigo.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
        
        case 'validar-artigo':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/pagina-validar-artigo.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
       
        case 'validar-artigo':
            $resultDados = new conexao ();
            $dados = $resultDados->selecionaDados('SELECT * FROM facavocemesmo');
            include_once 'site/paginas/includes/header.php';

            include_once 'painel/paginas/pagina-validar-artigo.php';
            break; 
        
        case 'painel-contato':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        default:
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;
    }
} else {
//não existe   
    include_once 'site/paginas/includes/header.php';
    include_once 'site/paginas/includes/menus.php';
    include_once 'site/paginas/includes/erro.php';
    include_once 'site/paginas/includes/footer.php';
}

