<?php 

class Impressive_Pharmacy_Block_Adminhtml_Pharmacy_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
	
	public function __construct()
	{
		parent::__construct();
        $this->_objectId = 'id';
        $this->_blockGroup = 'pharmacy';
        $this->_controller = 'adminhtml_pharmacy';
	}
}