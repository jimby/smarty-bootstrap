<?php

require_once('Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('./templates/');
$smarty->setCompileDir('./templates_c/');
$smarty->setConfigDir('./configs/');
$smarty->setCacheDir('./cache/');

//$smarty->assign('Contacts',
//    array('name' => 'James S. Dalton',
//          'street' => '610 Sierra Street',
//          'city' =>'Santa Barbara,CA 93103')
//           );

$smarty->assign('Contacts',
    array('name'    =>'James S. Dalton',
    	'street'    =>'610 Sierra Street',
        'city'      =>'Santa Barbara',
        'state'     =>'California ',
        'zip'       =>'93103',
    	'shipname'  =>'Jim Dalton',
    	'shipstreet'=>'260 Merida Drive',
    	'shipcity'  =>'Santa Barbara',
    	'shipstate' =>'Calif. ',
    	'shipzip'   =>'93111'));
         
$smarty->display('index.tpl');

?>

    