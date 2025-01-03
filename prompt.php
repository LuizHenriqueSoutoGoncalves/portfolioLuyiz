<?php

$nome = addslashes($_Post['mome']);
$email = addslashes($_Post['e-mail']);
$numero = addcslashes($_Post['number']);
$mensagem = addslashes($_Post['text-box'])

$para = "luizhenriqe1212@gmail.com";
$assunto = "Contatos - Portfolio";

$corpo = "Name: ".$nome."\n"."E-mail: ".$email."\n"."Number Phone: ".$numero."\n"."Conteúdo: ".$mensagem

$head = "From: teste@inteliogica.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$head)){
    echo("E-mail Enviado Com Sucesso");
}
else{
    echo("Houve um Erro ao enviar o email!");
}
?>