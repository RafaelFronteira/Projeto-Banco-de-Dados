<?php
    require_once 'Php/configuracoes.php';
    $idLivro = $_GET['idLivro'];
    $usuario = '85947245000';
    $data_atual = date("Y-m-d");


    $sql = "SELECT usuario, livro, data_acesso, acessos FROM registro where livro = {$idLivro}";
    $result = $conecta->query($sql);

    if ($result->num_rows > 0) {
        $acesso;
        while($row = $result->fetch_assoc()) {
            $acesso = $row['acessos'];
            $acesso++;
        }
        //Se tem um registro, atualiza

        $sql = "UPDATE registro SET data_acesso='{$data_atual}', acessos={$acesso} WHERE livro= {$idLivro}";

        if (mysqli_query($conecta, $sql)) {
            echo "<script>Bombou!</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conecta);
        }
    }
    else {
        //Se não tem, insere novo registro
        $sql = "INSERT INTO registro (usuario, livro, data_acesso, acessos) VALUES ('{$usuario}',{$idLivro},'{$data_atual}', 1)";

        if ($conecta->query($sql) === TRUE) {
            echo "<script>Bombou!</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conecta->error;
        }
    }

    $sql = "SELECT L.id, L.titulo, L.autor,L.editora,C.categoria,L.descricao,L.ano,L.subcategoria,L.img,L.src FROM livro as L JOIN categoria as C on L.categoria = C.id WHERE L.id=$idLivro";
    $comando = $conecta->query($sql);




    //variaveis
    $livro;
    $autor;
    $editora;
    $ano;
    $categoria;
    $subcategoria;
    $descricao;
    $img;
    $pdf;
    while($dado = $comando->fetch_assoc()) {
        $livro = $dado['titulo'];
        $autor = $dado['autor'];
        $editora = $dado['editora'];
        $ano = $dado['ano'];
        $categoria = $dado['categoria'];
        $subcategoria = $dado['subcategoria'];
        $descricao = $dado['descricao'];
        $img = $dado['img'];
        $pdf = $dado['src'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BookStand-Br- (nome do livro)</title>
        <meta charset="utf-8">
	    <link rel="stylesheet" href="Css/font-awesome.min.css">
        <link rel="stylesheet" href="Css/estiloPadrao.css">
        <link rel="stylesheet" href="Css/detalhe.css">
    </head>
    <body>
	<div id="conteudo">
		<header>
            <?php
		        echo "<h1 style='text-align: center'>$livro</h1>";
            ?>
		</header>

		<article>
            <section style="text-align: center">
			    <figure>
                    <?php
				        echo "<img src='$img' alt='$livro' width='500' height='250' title='$livro'>";
                    ?>
                </figure>
		    </section>

		    <div id="divLer">
                <?php
                echo "<a id='linkLer' href='$pdf' target='_blank'>";
                    echo "<i class='fa fa-file-pdf-o fa-2x' aria-hidden='true'></i>";
                    echo "Ler - $livro";
                echo "</a>";
                ?>
		    </div>

		    <section class="detalhesLivro">
                <?php
                echo "<h5>Autor:</h5>";
                echo "<p>$autor</p>";
                
                echo "<h5>Editora:</h5>";
                echo "<p>$editora</p>";
                
                echo "<h5>Ano:</h5>";
                echo "<p>$ano</p>";
                
                echo "<h5>Categoria:</h5>";
                echo "<p>$categoria</p>";
                
                echo "<h5>Subcategoria:</h5>";
                echo "<p>$subcategoria</p>";

                echo "<h5>Descrição:</h5>";
                echo "<p>$descricao</p>";
                ?>
		    </section>
		</article>
	</div>
    </body>
</html>

<?php
    $conecta->close();
?>