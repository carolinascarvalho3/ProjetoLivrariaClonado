<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
        require_once('Livro.php');
        require_once('Cliente.php');
        require_once('Funcionario.php');

        use Projeto\ProjetoLivrariaTINT01T\PHP\Livro;
        use Projeto\ProjetoLivrariaTINT01T\PHP\Cliente;
        use Projeto\ProjetoLivrariaTINT01T\PHP\Funcionario;


?>
<DOCtype HTML>
<HTML lang="PT-BR">
    
        <head>
            <meta charset="UTF-8">       
        </head>

        <body>
            <form method="POST">
            
            <label>Código</label>
            <input type="codigo" id="codigo" name="codigo"/><br><br>

            <label>Livro</label>
            <input type="livro" id="livro" name="livro"/><br><br>

            <label>Cliente</label>
            <input type="text" id="cliente" name="cliente"/><br><br>

            <label>Quantidade</label>
            <input type="text" id="quantidade" name="quantidade"/><br><br>

            <label>Data de Retirada</label>
            <input type="text" id="dtRetirada" name="dtRetirada"/><br><br>

            <label>Data de Devolução</label>
            <input type="text" id="dtDevolucao" name="dtDevolucao"/><br><br>

            <label>Multa</label>
            <input type="text" id="multa" name="multa"/><br><br>

            

            <button>Registrar
            <?php

                try{
                $codigo          = $_POST['L1111'];
                $livro           = $_POST['Orgulho e Preconceito']['Harry Potter e a pedra filosofal'];
                $cliente         = $_POST['Franscisca Meirelles'];
                $quantidade      = $_POST['2'];
                $dtRetirada      = $_POST['02/04/2024'];
                $dtDevolucao     = $_POST['13/05/2024'];
                $multa           = $_POST['R$ 70,00'];
                $reserva1  = new Reservao($codigo,$livro,$cliente,$quantidade,$dtRetirada,$dtDevolucao,$multa);


                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>
            <?php echo $reserva1->imprimir();?>
        </form>
    </body>
</HTML>