<?php 
/**
* 
*/
class Impressive_Pharmacy_Block_Adminhtml_Pharmacy_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
	
	public function __construct()
	{
		parent::_construct();
		$this->setId('fid');
		$this->setDestElementId('edit_form'); //add for id
		$this->setTitle('pharmacy tab');
	}
	protected function _beforeToHtml(){
		$this->addTab('tabid', array(
                   'label' => Mage::helper('pharmacy')->__('medicine'),
                   'title' => Mage::helper('pharmacy')->__('medicine'),
                   'content' => $this->getLayout()
           ->createBlock('pharmacy/adminhtml_pharmacy_edit_tab_formfields')
          ->toHtml()
           ));
		return parent::_beforeToHtml();
	}
}