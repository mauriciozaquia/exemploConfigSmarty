<?php

    include('configs/config.php');

    $nome = 'Mauricio Zaquia';
    $site = 'https://www.linkedin.com/in/mauricio-zaquia/';

    $smarty->assign('nome', $nome);
    $smarty->assign('site', $site);

    $smarty->display('index.tpl');

?>