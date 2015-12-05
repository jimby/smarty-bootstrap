<?php /* Smarty version 3.1.27, created on 2015-12-04 17:50:06
         compiled from "/var/www/test/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1158143399566242ce575608_56833641%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dac7c841ef4b3949c74d4de721737881a11e8283' => 
    array (
      0 => '/var/www/test/index.tpl',
      1 => 1449280200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158143399566242ce575608_56833641',
  'variables' => 
  array (
    'Contacts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566242ce5d51f2_66468193',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566242ce5d51f2_66468193')) {
function content_566242ce5d51f2_66468193 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1158143399566242ce575608_56833641';
?>


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

<?php }
}
?>