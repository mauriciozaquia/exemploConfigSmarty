<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 20:37:39
  from 'D:\Projetos\xampp\htdocs\exemploConfigSmarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f722d73506373_29118697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2fc07ee7d51ac5964ecb9f30d6f8ab230220b9b' => 
    array (
      0 => 'D:\\Projetos\\xampp\\htdocs\\exemploConfigSmarty\\templates\\index.tpl',
      1 => 1600049192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f722d73506373_29118697 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
		<title> Trabalhando com smarty </title>
	</head>
	<body>
		<h1>Bem-vindo ao Smarty</h1>
		Nome: <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 <br />
		Site: <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
 <br />
	</body>
</html><?php }
}
