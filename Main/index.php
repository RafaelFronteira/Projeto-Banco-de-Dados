<!DOCTYPE html>
<html>
    <head>
        <!--título da aba do site-->
        <title>BookStand-Br - Página Inicial</title>
        <!--configura os acentos-->
        <meta charset="utf-8">
        <!--pegando arquivo css para estilizar a página-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/estiloPadrao.css">        
        <link rel="Stylesheet" href="Css/estiloPaginaInicial.css">
    </head>
    <body>
        <div id="conteudo">
            <!--cabeçalho da página-->
            <header>
                <?php
                echo "<h1>";
                    echo "<img id='logo' src='img/logo2.png'>";
                echo "</h1>";
                echo "<!--links de navegação-->";
                echo "<section class='conteudoPag'>";
                   echo "<ul class='nav nav-tabs'>";
                        echo "<li role='presentation' class='active'><a href='index.php'>Home</a></li>";
                        echo "<li role='presentation'><a href='paginalogin.html'>Login</a></li>";
                        echo "<li role='presentation'><a href='cadastroCliente.html'>Cadastre-se</a></li>";
                        echo "<li class='dropdown'>";
                            echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Categorias<span class='caret'></span></a>";
                            echo "<ul class='dropdown-menu'>";
                                require_once 'Php/pegaCategoria.php';   
                                while($dado = $comando->fetch_assoc()) {
                                    echo "<li>";
                                    echo "<a href='#' style='text-decoration: none'>".$dado['categoria']."</a>";
                                    echo "</li>";
                                } 
                            echo "</ul>";
                        echo "</li>";
                    echo "</ul>";
                    echo "<form method='POST' class='navbar-form navbar-right' role='search' action='Php/searchLivro.php'>";
                        echo "<input type='search' class='form-control' name='pesquisa' placeholder='Digite o nome do livro'>";
                        echo "<input type='submit'class='btn btn-default' value='Procurar'>";
                    echo "</form>";
                echo "</section>";
                ?>
            </header>
    
            <!--conteúdo principal da página-->
            <article class="conteudoPagLivros"> 
                <section class="recentesConteudo">
                    <!--Livros recentes-->
                    <h3 class="title">Recentes</h3>
                    <ul class="ulRecentes">
                            <?php
                                require_once 'Php/pegaLivros.php';
                                while($livro = $comando->fetch_assoc()) {
                                    $id = $livro['id'];
                                    echo "<li>";
                                    echo "<div class='listaRecentes' style='text-decoration: none'>";
                                    echo "<a href='detalhe.php?idLivro=$id' style='text-decoration: none'>";
                                    echo "<section class='sessaoRecente'>";
                                    echo "<img class='imgRecentes' title=".$livro['titulo']." src=".$livro['img'].">";
                                    echo "<div class='dadosRecentes'>";
                                    echo "<p class='tituloRecente'>".$livro['titulo']."</p>";
                                    echo "<p class='descricaoRecente'>".$livro['descricao']."</p>";
                                    echo "</div>";
                                    echo "</section>";
                                    echo "</a>";
                                    echo "</div>";
                                    echo "</li>";
                                }
                            ?>
                    </ul>
            
                </section>
            </article>
        </div>
    </body>
</html> 