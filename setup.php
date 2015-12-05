<?php
require('Smarty.class.php');
//require ('/usr/local/lib/smarty-3.1.27/libs/Smarty.class.php');

class smart extends Smarty {

   function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('/var/smarty/templates/');
        $this->setCompileDir('/var/smarty/templates_c/');
        $this->setConfigDir('/var/smarty/configs/');
        $this->setCacheDir('/var/smarty/cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        //$this->assign('app_name', 'myapp');
   }

}
?>