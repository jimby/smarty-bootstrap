<?php /* Smarty version 3.1.27, created on 2015-12-06 13:15:04
         compiled from "/var/www/test/indexSB.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3504730185664a55849dce5_74859696%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de75a673b36e2abcb58198f0d899ba00fb3188b5' => 
    array (
      0 => '/var/www/test/indexSB.tpl',
      1 => 1449436495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3504730185664a55849dce5_74859696',
  'variables' => 
  array (
    'Contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5664a5584e9671_03906288',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5664a5584e9671_03906288')) {
function content_5664a5584e9671_03906288 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3504730185664a55849dce5_74859696';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Bootstrap 3 Vertical Form Layout</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
> 

<!--
<link rel="stylesheet" href="/home/jim/bin/bootstrap-3.3.5-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/home/jim/bin/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
<?php echo '<script'; ?>
 src="/home/jim/bin/bootstrap-3.3.5-dist/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/home/jim/bin/bootstrap-3.3.5-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
> 
-->
<style type="text/css">
    /* Some custom styles to beautify this example */
    .demo-content{
        padding: 15px;
        font-size: 18px;
        min-height: 300px;
        background: #dbdfe5;
        margin-bottom: 10px;
    }
    .demo-content.bg-alt{
        background: #abb1b8;
    }
</style>
</head>
<body>


<div class="row">
	<div class="col-md-3">
		<div class="demo-content"phooey>
	 </div>	
	
	<div class="col-md-3">
		<div class="demo-content bg-alt"><?php echo "BILL TO:";?>
</div>
	</div>

	<div class="col-md-3">
         <div class="demo-content"><?php echo "ship to";?>
</div>
    </div>

	<div class="col-md-3">
        <div class="demo-content bg-alt"></div>
     </div>
</div>
	
<!--<?php echo "BILL TO:";?>
<br /><br />-->

<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['name'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['street'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['city'];
echo ",";
echo $_smarty_tpl->tpl_vars['Contacts']->value['state'];
echo $_smarty_tpl->tpl_vars['Contacts']->value['zip'];?>
<br /><br/>

<?php echo "SHIP TO:";?>
<br /><br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['shipname'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['shipstreet'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['shipcity'];
echo ",";
echo $_smarty_tpl->tpl_vars['Contacts']->value['shipstate'];
echo $_smarty_tpl->tpl_vars['Contacts']->value['shipzip'];?>
<br /><br/>
</body>
</html>


<?php }
}
?>