<?php
class Impressive_Pharmacy_Model_Resource_Test extends Mage_core_Model_Resource_Db_Abstract{
	protected function _construct(){
		$this->_init('pharmacy/test','id');
	} 
}
