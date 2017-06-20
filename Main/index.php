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
                <?php
                echo "<h1>";
                    echo "<img id='logo' src='img/logo2.png'>";
                echo "</h1>";
                echo "<!--links de navegação-->";
                echo "<section class='conteudoPag'>";
                    echo "<nav class='links'>";
                        echo "<a href='index.php'>Home</a>";
                        echo "<a href='pagAdmin.php'>Admin </a>";
                        echo "<a href='paginalogin.html'>Login</a>";
                        echo "<a href='cadastroCliente.html'> Cadastrar-se</a>";
                    echo "</nav>";
                    echo "<form method='POST' class='pesquisa' action='Php/searchLivro.php'>";
                        echo "<input type='search' name='pesquisa' placeholder='Digite o nome do livro'>";
                        echo "<input type='submit' value='Procurar'>";
                    echo "</form>";
                echo "</section>";
                ?>
            </header>
    
            <!--conteúdo principal da página-->
            <article class="conteudoPagLivros"> 
    
                <!--organiza por assunto-->
                <section class="categoria">
                    <!--Categorias-->
                    <h3>Categorias</h3>
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
                    <h3 class="title">Recentes</h3>
                    <ul class="ulRecentes">
                            <?php
                                require_once 'Php/pegaLivros.php';
                                while($livro = $comando->fetch_assoc()) {
                                    $id = $livro['id'];
                                    echo "<li>";
                                    echo "<div class='listaRecentes'>";
                                    echo "<a href='detalhe.php?idLivro=$id'>";
                                    echo "<section class='sessaoRecente'>";
                                    echo "<img class='imgRecentes' title=".$livro['titulo']." alt=".$livro['titulo']." src=".$livro['img'].">";
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