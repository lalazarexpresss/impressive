<?php  
/**
* 
*/
class Impressive_Pharmacy_Block_Adminhtml_Pharmacy extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	
	function __construct()
	{
		$this->_controller = "adminhtml_pharmacy";
		$this->_blockGroup = "pharmacy";
		/* Page title*/
		$this->_headerText = Mage::helper('pharmacy')->__('Impressive');
        
        $this->_addButtonLabel = 'Add New';
  
     parent::__construct();
	}
}