<?php /* Smarty version 3.1.27, created on 2015-12-06 11:49:22
         compiled from "/var/www/test/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2124303719566491420f93a1_09772123%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dac7c841ef4b3949c74d4de721737881a11e8283' => 
    array (
      0 => '/var/www/test/index.tpl',
      1 => 1449431357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2124303719566491420f93a1_09772123',
  'variables' => 
  array (
    'Contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56649142125f78_62208725',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56649142125f78_62208725')) {
function content_56649142125f78_62208725 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2124303719566491420f93a1_09772123';
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
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>



<?php echo "BILL TO:";?>
<br /><br />
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