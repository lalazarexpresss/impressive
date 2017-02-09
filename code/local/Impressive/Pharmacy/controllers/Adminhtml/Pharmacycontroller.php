<?php
class Impressive_Pharmacy_Adminhtml_PharmacyController extends Mage_Adminhtml_Controller_Action{
	Public function indexAction(){

		$this->Loadlayout()->_setActiveMenu('impressive_pharmacy/menu2');
		
		$this->getLayout()->getBlock('head')->setTitle('pharmacy');
		$this->renderLayout();
		//var_dump($this->getLayout()->getUpdate()->getHandles());
	}
	public function gridAction(){
		$this->getResponse()->setBody($this->getLayout()->createBlock(
			$this->getLayout()->createBlock('pharmacy/adminhtml_pharmacy2_grid')->toHtml()
			));
	}
}