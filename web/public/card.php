<?php

require( dirname( __FILE__ ).'/../libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/../tpl';
$smarty->compile_dir  = dirname( __FILE__ ).'/../tplc';
$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';


$cards = array();
$selectedNo = ($_GET["no"]) ? explode(",", $_GET["no"]) : null;
$typeText = array(
  "火" => "red",
  "地" => "green",
  "風" => "yellow",
  "水" => "blue",
  "光" => "white",
  "闇" => "black"
);

$selectedCards = array();
if($selectedNo){
  foreach($selectedNo as $value){
    $values = explode(".", $value);
    $valuesLength = count($values);
    if($valuesLength == 2){
      for($i = 0;$i < $values[1]; $i++){
        $selectedCards[] = $values[0];
      }
    }else if($valuesLength == 1){
      $selectedCards[] = $values[0];
    }
  }
}


//カードデータ読み込み
if(($fp = fopen("../../cards/set_firstset/firstset.csv", "r")) !== false && $selectedCards){
  while (($data = fgetcsv($fp, 0, "\t")) !== false){
    if(in_array($data[0], $selectedCards)){
      $data[3] = $typeText[$data[3]];
      $data = str_replace("\n","<br>",$data);
      $cards[] = $data;
    }
  }
}
$smarty->assign("cards", $cards);
$smarty->display('viewer.tpl');

?>
