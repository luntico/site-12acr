<?php

//////////////////////////////////////////////////////////////////////////
///     Limita o título dos posts na quantidade de caracteres desejado  /////
////////////////////////////////////////////////////////////////////////

    function title_limite($maximo) {
        $title = get_the_title();
        if (strlen($title) > $maximo) {
            $continua = '...';
        }
        $title = mb_substr($title, 0, $maximo, 'UTF-8');
        echo $title . $continua;
    }

// para chamar a função use title_limite(20);