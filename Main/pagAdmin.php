<!DOCTYPE html>
<html>
    <head>
        <title>BookStand-Br - Administradores</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Css/estiloPadrao.css">
        <link rel="stylesheet" href="Css/estiloAdmin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        <section id="conteudo">
            <header style='margin:20px;'>
                <h1 style='text-align: center'>Página de Administradores</h1>
            </header>
            <section class='principal'>
                <div style='margin:50px;'>
                    <ul class='nav nav-pills'>
                        <li role='presentation' class='active'><a href='index.php'>Home</a></li>
                        <li role='presentation' class='active'><a href='insereLivro.html'>Adicionar Livro</a></li>
                        <li role='presentation'><a href='paginaAdCategoria.html'>Adicionar Categoria</a></li>
                    </ul>
                </div>
                <h3 style='text-align: center'>Livros mais acessados</h3>
                <?php
                    require_once 'Php/configuracoes.php';
                    $img;
                    $id;
                    $titulo;
                    $descricao;
                    $acessos;
                    
                    $sql1 = "select L.id, L.titulo, L.img, L.descricao, R.acessos FROM registro AS R JOIN livro AS L on L.id = R.livro order by acessos DESC";
                    $comando = $conecta->query($sql1);
                    while($livro = $comando->fetch_assoc()) {
                        $id = $livro['id'];
                        $titulo = $livro['titulo'];
                        $img = $livro['img'];
                        $descricao = $livro['descricao'];
                    
                        
                        $sql2 = "SELECT acessos FROM registro where livro = $id";
                    $result = $conecta->query($sql2);

                    if ($result->num_rows > 0) {
  
                        while($row = $result->fetch_assoc()) {
                            $acessos = $row['acessos'];
                        }
                    } 
                        echo "<div style='display: flex;justify-content: flex-start; flex-wrap: wrap'>";
                            echo "<div class='col-sm-6'>";
                               echo " <div class='thumbnail'>";
                                 echo "   <img src='$img' title='$titulo'>";
                                   echo " <div class='caption'>";
                                      echo "  <h3>$titulo</h3>";
                                       echo " <p>$descricao</p>";
                                       echo " <p><a href='detalhe.php?idLivro=$id' class='btn btn-primary' role='button'>Detalhes</a><label style='margin-left: 10px'>Visualizações: $acessos</label></p>";
                                   echo " </div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>
            <section>
        </section>
    </body>
</html> 