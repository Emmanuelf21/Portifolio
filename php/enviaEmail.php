<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $razao = addslashes($_POST['razao']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "emmanuelfranco2001@gmail.com";
    $assunto = "Contato Portifólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone para contato: ".$telefone."\n"."Motivo: ".$razao."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: emmanuelfranco2001@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }
    
 