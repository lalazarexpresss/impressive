<?php  
/**
* 
*/
class Impressive_Pharmacy_Block_Adminhtml_Pharmacy2 extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	
	function __construct()
	{
		$this->_controller = "adminhtml_pharmacy2";
		$this->_blockGroup = "pharmacy";
		/* Page title*/
		$this->_headerText = Mage::helper('pharmacy')->__('pharmacy');
        
        $this->_addButtonLabel = 'Add New';
  
     parent::__construct();
	}
}