<?php 

$rsSections = CIBlockSection::GetList(arFilter: [
    // 'SECTION_ID' => $arResult['PARENT_SECTION'],
    'SECTION_ID' => $arResult['PREVIEW_TEXT'],
    // 'SECTION_ID' => $arResult['PARENT_SECTION']['ID'],
    // 'GLOBAL_ACTIVE' => 'Y',
    // 'DEPTH_LEVEL' => 2,
]);
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
// print_r($rsSections->GetNext());
// print_r($arResult);
echo '</pre>';

?>