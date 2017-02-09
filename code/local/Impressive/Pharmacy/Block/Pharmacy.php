<?php  
/**
* 
*/
class Impressive_Pharmacy_Block_Pharmacy extends Mage_core_Block_Template
{
	
	public function getCat()
	{
		//return "impressive";
		return $catCatg = Mage::getModel('catalog/category')->getCollection()->addAttributeToFilter('parent_id',2);

	}
	public function getProducts(){
		return $prod = Mage::getModel('catalog/product')->getCollection();
	}
	public function getTest(){
		$test = Mage::getModel('pharmacy/test')->getCollection();
		print_r($test->getData());
	}
}