<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
 * @var string $componentPath
 * @var string $componentName
 * @var array $arCurrentValues
 * */
 
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;

$arComponentParameters = [
	"GROUPS" => [
		"SETTINGS" => [
			"NAME" => Loc::getMessage('AMIGOLAB_FORM_PROP_SETTINGS'),
			"SORT" => 500,
		]
	],
	"PARAMETERS" => [
		"TICKER" => [
			"PARENT" => "SETTINGS",
			"NAME" => Loc::getMessage('AMIGOLAB_STOCKPRICE_PROP_TICKER'),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "",
			"COLS" => 25
		],
		'CACHE_TIME' => ['DEFAULT' => 3600]
	]
];
?>