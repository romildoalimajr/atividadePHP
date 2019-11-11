<?php

    $nome  = $_POST['nome'];
    $corpo = " 
        Nome.: "    .$_POST['nome']."
        Email.: "   .$_POST['email']."
        Mensagem.: " .$_POST['mensagem']."
    ";
    mail('odlimor.sevla@gmail.com',$nome, $corpo,'From: romildo@kalangos.net');
    echo "Formulário enviado com sucesso!";

