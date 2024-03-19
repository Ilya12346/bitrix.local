<?php 

$res = CIBlockElement::GetByID((int)$arResult['PROPERTIES']['brend']['VALUE']);
if($ar_res = $res->GetNext()){
	$arResult['PROPERTIES']['brend']['name_brend']= $ar_res['NAME'];
}




echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '</br>';
echo '<pre>';
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($getiblock->GetNext());
// print_r($arResult);
echo '</pre>';



?>