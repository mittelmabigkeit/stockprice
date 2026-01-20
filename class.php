<?
use \Bitrix\Main\Loader;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class AmigolabStockprice extends CBitrixComponent
{

	private function chekModules()
	{
		if (Loader::includeModule('iblock')) {
			return true;
		}
		return false;
	}

	protected function setStockpriceResult()
	{
		$uri = 'https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/'.$this->arParams['TICKER'].'.json?iss.meta=off';
		$result = file_get_contents($uri);
		$resultObject = json_decode($result,true);
		$this->arResult['NAME'] = $resultObject['securities']['data'][0][9];
		$this->arResult['TICKER'] = $resultObject['marketdata']['data'][0][0];
		$this->arResult['COST'] = $resultObject['marketdata']['data'][0][12];
		$this->arResult['COST_CHANGE'] = $resultObject['marketdata']['data'][0][40];
		$this->arResult['COST_CHANGE_PROC'] = $resultObject['marketdata']['data'][0][25];
		$this->arResult['DATE'] = $resultObject['marketdata']['data'][0][47];
		$this->arResult['MIN'] = $resultObject['marketdata']['data'][0][10];
		$this->arResult['MAX'] = $resultObject['marketdata']['data'][0][11];
		$this->arResult['VOLUME'] = $resultObject['marketdata']['data'][0][26];
	}

	public function executeComponent()
	{
		$this->chekModules();
		$this->setStockpriceResult();

		$this->includeComponentTemplate();
	}
}
?>