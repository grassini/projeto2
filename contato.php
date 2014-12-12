<div class="span8 row-fluid center conteudo">
    <form id="contact-form" name="contact-form" method="post" action="">
        <fieldset>
            <legend>Página de Contatos</legend>
            <label>Nome</label>
            <input class="input-xlarge" name="nome" type="text" placeholder="Digite o seu nome..." required="">

            <label>E-mail</label>
            <input class="input-xlarge" name="email" type="email" placeholder="Digite o seu email..." required="">

            <label>Asunto</label>
            <input class="input-xlarge" name="assunto" type="text" placeholder="Digite o Assunto...">

            <label>Mensagem</label>
            <textarea class="input-xxlarge" name="mensagem" rows="8"></textarea><br/>

            <input type="submit" class="btn" name="enviar" value="Enviar" />
        </fieldset>
    </form>


    <?php
        if(isset($_POST['enviar']))://Verificando se Existe o Post enviar
            if($_POST['enviar'] = 'Enviar'):

                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
                $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

            endif;

            if( //Validando os campos
                $nome == '' ||
                $email == '' ||
                $assunto == '' ||
                $mensagem == ''
            ):
                echo "<script>alert('Todos os campos devem ser preenchidos')</script>";

            else:
                echo "<p class='text-success'>Dados enviados com sucesso, abaixo seguem os dados que você enviou</p>";
                echo "Nome: <b>$nome</b><br/>";
                echo "E-mail: <b>$email</b><br/>";
                echo "Assunto: <b>$assunto</b><br/>";
                echo "Mensagem: <b>$mensagem</b><br/>";
            endif;
        endif;
    ?>

</div>
