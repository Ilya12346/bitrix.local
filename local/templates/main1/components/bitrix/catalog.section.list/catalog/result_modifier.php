<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$i = 0;
foreach($arResult['SECTIONS'] as $cell => $arElement)
{

        $file = CFile::ResizeImageGet(
            $arElement['PICTURE']['ID'],
        array("width" => 1200, "height" => 1200),	BX_RESIZE_IMAGE_EXACT,
        true );
        $arResult['SECTIONS'][$cell]['PICTURE']['WIDTH'] = $file['width'];
        $arResult['SECTIONS'][$cell]['PICTURE']['HEIGHT'] = $file['height'];
        $arResult['SECTIONS'][$cell]['PICTURE']['SRC'] = $file['src'];
	if ($i == 2) {
			$file = CFile::ResizeImageGet(
			$arElement['DETAIL_PICTURE'],
			array("width" => 670, "height" => 240),	BX_RESIZE_IMAGE_EXACT,
			true );
			$arResult['SECTIONS'][$cell]['DETAIL_PICTURE'] = [
			'ID' => $arElement['DETAIL_PICTURE'],
			'WIDTH' => $file['width'],
			'HEIGHT' => $file['height'],
			'SRC' => $file['src'],
		];

	}
	else {

		$file = CFile::ResizeImageGet(
			$arElement['DETAIL_PICTURE'],
			array("width" => 324, "height" => 460),	BX_RESIZE_IMAGE_EXACT,
			true );
			$arResult['SECTIONS'][$cell]['DETAIL_PICTURE'] = [
			'ID' => $arElement['DETAIL_PICTURE'],
			'WIDTH' => $file['width'],
			'HEIGHT' => $file['height'],
			'SRC' => $file['src'],
		];

	}
$i++;
}



?>








