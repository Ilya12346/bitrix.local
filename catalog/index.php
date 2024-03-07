<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
function pr($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
$i = 1;
pr($GLOBALS);
?>

<?if($i):?>
<?php 

	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list", 
		"catalog", 
		array(
			"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
			"ADD_SECTIONS_CHAIN" => "N",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COUNT_ELEMENTS" => "N",
			"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
			"FILTER_NAME" => "sectionsFilter",
			"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
			"IBLOCK_ID" => "4",
			"IBLOCK_TYPE" => "slider",
			"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
			"SECTION_FIELDS" => array(
				0 => "NAME",
				1 => "DESCRIPTION",
				2 => "PICTURE",
				3 => "DETAIL_PICTURE",
				4 => "DATE_CREATE",
				5 => "TIMESTAMP_X",
				6 => "",
			),
			"SECTION_ID" => "",
			"SECTION_URL" => '',
			"SECTION_USER_FIELDS" => array(
				0 => "UF_COLOR",
				1 => "Выбор цвета",
				2 => "",
			),
			"SHOW_PARENT_NAME" => "Y",
			"TOP_DEPTH" => "1",
			"VIEW_MODE" => "LINE",
			"COMPONENT_TEMPLATE" => "catalog"
		),
		false
	); 
?> 
<?else:?>






















<?php


// 	$APPLICATION->IncludeComponent("bitrix:news.list", "catalog_ice_cream", Array(
// 	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
// 		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
// 		"AJAX_MODE" => "N",	// Включить режим AJAX
// 		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
// 		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
// 		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
// 		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
// 		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
// 		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
// 		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
// 		"CACHE_TYPE" => "A",	// Тип кеширования
// 		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
// 		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
// 		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
// 		"DISPLAY_DATE" => "N",	// Выводить дату элемента
// 		"DISPLAY_NAME" => "Y",	// Выводить название элемента
// 		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
// 		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
// 		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
// 		"FIELD_CODE" => array(	// Поля
// 			0 => "",
// 			1 => "",
// 		),
// 		"FILTER_NAME" => "",	// Фильтр
// 		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
// 		"IBLOCK_ID" => "4",	// Код информационного блока
// 		"IBLOCK_TYPE" => "slider",	// Тип информационного блока (используется только для проверки)
// 		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
// 		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
// 		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
// 		"NEWS_COUNT" => "20",	// Количество новостей на странице
// 		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
// 		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
// 		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
// 		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
// 		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
// 		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
// 		"PAGER_TITLE" => "Новости",	// Название категорий
// 		"PARENT_SECTION" => "",	// ID раздела
// 		"PARENT_SECTION_CODE" => "",	// Код раздела
// 		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
// 		"PROPERTY_CODE" => array(	// Свойства
// 			0 => "is_it_cool",
// 			1 => "is_it_new",
// 			2 => "in_box",
// 			3 => "gram",
// 			4 => "in_poddon",
// 			5 => "",
// 		),
// 		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
// 		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
// 		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
// 		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
// 		"SET_STATUS_404" => "N",	// Устанавливать статус 404
// 		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
// 		"SHOW_404" => "N",	// Показ специальной страницы
// 		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
// 		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
// 		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
// 		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
// 		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
// 		"COMPONENT_TEMPLATE" => ".default"
// 	),
// 	false
// );

?>














<?endif?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>