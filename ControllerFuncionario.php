<?php
    namespace Projeto\ProjetoLivrariaTINT01T\PHP;
        require_once('Funcionario.php');

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
            <input type="text" id="codigo" name="codigo"/><br><br>

            <label>Cargo</label>
            <input type="text" id="cargo" name="cargo"/><br><br>

            <label>Salário</label>
            <input type="text" id="salario" name="salario"/><br><br>

            <label>Setor</label>
            <input type="text" id="setor" name="setor"/><br><br>

            <label>CPF</label>
            <input type="text" id="cpf" name="cpf"/><br><br>

            <label>Nome</label>
            <input type="text" id="nome" name="nome"/><br><br>

            <label>Telefone</label>
            <input type="text" id="telefone" name="telefone"/><br><br>

            <label>Endereço</label>
            <input type="text" id="endereço" name="endereco"/><br><br>

            <button>Cadastrar
            <?php

                try{
                $codigo        = $_POST['C4D4D5'];
                $cargo         = $_POST['Atendente'];
                $salario       = $_POST['R$900,00'];
                $setor         = $_POST['Operador de funções da loja'];
                $cpf           = $_POST['145.588.645.-47'];
                $nome          = $_POST['Silvio Farias Tato'];
                $telefone      = $_POST['(11)93421-5674'];
                $endereco      = $_POST['Rua da Cebola Azeda, 404'];
                $funcionario1  = new Funcionario($codigo,$cargo,$salario,$setor,$cpf,$nome,$telefone,$endereco);


                }catch(Exception $erro){
                    echo $erro;
                }//fim do try_catch
            ?>
            </button><br><br>
            <?php echo $funcionario1->imprimir();?>
        </form>
    </body>
</HTML>