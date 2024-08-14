<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
        require_once('Livro.php');//Conexão esteja completa
        use Projeto\ProjetoLivrariaTINT01T\PHP\ControllerLivro;
        use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;

?>
<DOCtype HTML>
<HTML lang="PT-BR">
    
        <head>
            <meta charset="UTF-8">       
        </head>

        <body>
            <form method="POST">
            
            <label>ISBN</label>
            <input type="text" id="isbn" name="isbn"/><br><br>

            <label>Título</label>
            <input type="text" id="titulo" name="titulo"/><br><br>

            <label>Autor</label>
            <input type="text" id="autor" name="autor"/><br><br>

            <label>Edição</label>
            <input type="text" id="edicao" name="edicao"/><br><br>

            <label>Data de Lançamento</label>
            <input type="text" id="dtLancamento" name="dtLancamento"/><br><br>

            <label>Quantidade</label>
            <input type="text" id="quantidade" name="quantidade"/><br><br>

            <label>Preço Unitário</label>
            <input type="text" id="precoUnitario" name="precoUnitario"/><br><br>

            <label>Preço Total</label>
            <input type="text" id="precoTotal" name="precoTotal"/><br><br>

            <button>Cadastrar Livro
            <?php

                try{
                $isbn           = $_POST['isbn'];
                $titulo         = $_POST['titulo'];
                $autor          = $_POST['autor'];
                $edicao         = $_POST['edicao'];
                $dtLancamento   = $_POST['dtLancamento'];
                $quantidade     = $_POST['quantidade'];
                $precoUnitario  = $_POST['precoUnitario'];
                $precoTotal     = $_POST['precoTotal'];
                $livro1  = new Livro($isbn,$autor,$edicao,$dtLancamento,$quantidade,$precoUnitario,$precoTotal);


                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>
            <?php echo $livro1->imprimir();?>
        </form>
    </body>
</HTML>