<?php

require( dirname( __FILE__ ).'/../libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/../tpl';
$smarty->compile_dir  = dirname( __FILE__ ).'/../tplc';
$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';

$smarty->display('viewer.tpl');

?>
