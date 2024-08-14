<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
        require_once('Cliente.php');
        require_once('Livro.php');
        require_once('Funcionario.php');//Conexão esteja completa
        use Projeto\ProjetoLivrariaTINT01T\PHP\Cliente;
        use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;
        use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;


?>
<DOCtype HTML>
<HTML lang="PT-BR">
    
        <head>
            <meta charset="UTF-8">       
        </head>

        <body>
            <form method="POST">
            
            <label>Código Compra</label>
            <input type="text" id="codigoCompra" name="codigoCompra"/><br><br>

            <label>Livro</label>
            <input type="text" id="livro" name="livro"/><br><br>

            <label>Quantidade de Compra</label>
            <input type="text" id="quantidade" name="quantidade"/><br><br>

            <label>Total Compra</label>
            <input type="text" id="totalCompra" name="totalCompra"/><br><br>

            <label>Cliente</label>
            <input type="text" id="cliente" name="cliente"/><br><br>

            <label>Funcionário</label>
            <input type="text" id="funcionario" name="funcionario"/><br><br>

            

            <button>Comprar
            <?php

                try{
                $codigoCompra        = $_POST['C0001'];
                $livro               = $_POST['Applefield'];
                $quantidadeCompra    = $_POST['21'];
                $totalCompra         = $_POST['R$54'];
                $cliente             = $_POST['Mia'];
                $funcionario         = $_POST['Jaqueline'];
                $compra1  = new Compra($codigoCompra,$livro,$quantidadeCompra,$totalCompra,$cliente,$funcionario);


                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>
            <?php echo $compra1->imprimir();?>
        </form>
    </body>
</HTML>