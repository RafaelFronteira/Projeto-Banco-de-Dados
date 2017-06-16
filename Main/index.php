<!DOCTYPE html>
<html>
    <head>
        <!--título da aba do site-->
        <title>BookStand-Br - Página Inicial</title>
        <!--configura os acentos-->
        <meta charset="utf-8">
        <!--pegando arquivo css para estilizar a página-->
        <link rel="stylesheet" href="Css/estiloPadrao.css">
        <link rel="Stylesheet" href="Css/estiloPaginaInicial.css">
    </head>
    <body>
        <div id="conteudo">
            <!--cabeçalho da página-->
            <header>
                <h1>
                    <img id="logo" src="img/logo2.png">
                </h1>
                <!--links de navegação-->
                <section class="conteudoPag">
                    <nav class="links">
                        <a href="index.php">Home</a>
                        <a href="paginalogin.html">Login</a>
                        <a href="cadastroCliente.html"> Cadastrar-se</a>
                    </nav>
                    <form class="pesquisa">
                        <input type="search" placeholder="Digite o nome do livro">
                        <input type="submit" value="Procurar">
                    </form>
                </section>
            </header>
    
            <!--conteúdo principal da página-->
            <article class="conteudoPagLivros"> 
    
                <!--organiza por assunto-->
                <section class="categoria">
                    <!--Categorias-->
                    <h4>Categorias:</h4>
                    <ul class="ulCategoria">
                        <?php
                            require_once 'Php/pegaCategoria.php';   
                            while($dado = $comando->fetch_assoc()) {
                                echo "<li class='liCateg'>";
                                echo "<a href='#'>".$dado['categoria']."</a>";
                                echo "</li>";
                            } 
                        ?>
                    </ul>
                </section>
    
                <section class="recentesConteudo">
                    <!--Livros recentes-->
                    <h4 class="title">Recentes</h4>
                    <ul class="ulRecentes">
                            <?php
                                require_once 'Php/pegaLivros.php';

                                while($livro = $comando->fetch_assoc()) {
                                    echo "<li>";
                                    echo "<div class='listaRecentes'>";
                                    echo "<a href='#'>";
                                    echo "<img class='imgRecentes' title=".$livro['nome']." alt=".$livro['nome']." src=".$livro['img'].">";
                                    echo "<br>";
                                    echo "<span>".$livro['nome']."</span>";
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