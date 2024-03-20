<?php 

$res = CIBlockElement::GetByID((int)$arResult['PROPERTIES']['brend']['VALUE']);
if($ar_res = $res->GetNext()){
	$arResult['PROPERTIES']['brend']['name_brend']= $ar_res['NAME'];
}

$res_next = CIBlockElement::GetByID((int)$arResult['PROPERTIES']['next_element']['VALUE']);
if($ar_res = $res_next->GetNext()){
	$arResult['PROPERTIES']['next_element']['next_element']= $ar_res;
}

$arResult['PROPERTIES']['next_element']['image'] = CFile::ResizeImageGet(
    (int)$arResult['PROPERTIES']['next_element']['next_element']['PREVIEW_PICTURE'],
    ['height' => 620, 'weight' => 620],
    BX_RESIZE_IMAGE_EXACT,
);


foreach ($arResult['PROPERTIES']['gallery']['VALUE'] as $item) {

    $arResult['PROPERTIES']['gallery']['src_images'][] = CFile::ResizeImageGet(
        $item,
        ['height' => 1200, 'weight' => 1200],
        BX_RESIZE_IMAGE_EXACT,
    );
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
// print_r($arResult['PROPERTIES']['next_element']);

echo '</pre>';



?>