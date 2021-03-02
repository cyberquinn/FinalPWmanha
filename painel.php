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
            //P�gina inicial do Painel Adm           
            if (verificarLogin()) {

                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/dashboard.php';
                include_once 'painel/paginas/includes/footer.php';
                break;
            } else {
                include_once './site/paginas/includes/header.php';
                include_once './site/paginas/includes/menus.php';
                include_once 'painel/paginas/acesso/erroSenha.php';
                include_once './site/paginas/includes/footer.php';
            }
            break;

        case 'inicial':
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

        case 'tabela-artigos-validados':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/artigos-validados.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'artigos-validados':
               $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT *  FROM arquivosvalidados WHERE id = ' . $id);
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/visualizar-validados.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'validar-artigo':
            $resultDados = new Conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM facavocemesmo');
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
//                pegando variaveis via post
                $categoria = $_POST ['categoria'];
                $usuario = $_POST ['usuario'];
                $titulo = $_POST ['titulo'];
                $sobrenome = $_POST ['sobrenome'];
                $nome = $_POST ['nome'];
                $email = $_POST ['email'];
                $curso = $_POST ['curso'];
                $instituicao = $_POST ['instituicao'];
                $linkVideo = $_POST ['linkVideo'];
                $linkImagem = $_POST ['linkImagem'];
                $artigo = $_POST ['artigo'];

//                tratar os dados enviados via post
                $parametros = array(''
                    . ':categoria' => $categoria,
                    ':usuario' => $usuario,
                    ':titulo' => $titulo,
                    ':sobrenome' => $sobrenome,
                    ':nome' => $nome,
                    ':email' => $email,
                    ':curso' => $curso,
                    ':instituicao' => $instituicao,
                    ':linkVideo' => $linkVideo,
                    ':linkImagem' => $linkImagem,
                    ':artigo' => $artigo,
                );
                $resultDados = new conexao();
                $resultDados->intervencaoNoBanco('INSERT INTO '
                        . 'arquivosvalidados ('
                        . 'categoria, usuario, titulo, '
                        . 'sobrenome, nome, email, '
                        . 'curso, instituicao, linkVideo, '
                        . 'linkImagem, artigo)'
                        . ' '
                        . 'VALUES (:categoria, :usuario, :titulo, '
                        . ':sobrenome, :nome, :email, '
                        . ':curso, :instituicao, :linkVideo, '
                        . ':linkImagem, :artigo)', $parametros);

                include_once 'painel/paginas/artigos-validados.php';
            } else {
//                $parametros = array(
//                    ':id' => $_GET ['id'],
//                );
//                $resultDados = new conexao();
//                $resultDados->intervencaoNoBanco(''
//                        . 'DELETE FROM facavocemesmo WHERE id = :id', $parametros);
//                header('Location: ?pg=tabela-artigo');
                
                include_once 'painel/paginas/pagina-validar-artigo.php';
            }
            include_once 'painel/paginas/includes/footer.php';
            break;


        case 'painel-contato':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'vizualizar-contato':
            $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT *  FROM contato WHERE id = ' . $id);
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/vizualizar-contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'excluir-contato' :
            $parametros = array(
                ':id' => $_GET ['id'],
            );
            $resultDados = new conexao();
            $resultDados->intervencaoNoBanco(''
                    . 'DELETE FROM contato WHERE id = :id', $parametros);
            header('Location: ?pg=painel-contato');
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
    include_once 'painel/paginas/includes/header.php';
    include_once 'painel/paginas/includes/menus.php';
    include_once 'painel/paginas/acesso/erroSenha.php';
    include_once 'painel/paginas/includes/footer.php';
}

