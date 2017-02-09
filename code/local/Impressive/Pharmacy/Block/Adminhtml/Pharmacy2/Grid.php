<?php 

class Impressive_Pharmacy_Block_Adminhtml_Pharmacy2_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	
	public function __construct()
	{
	   parent::__construct();
       $this->setId('phpid');
       $this->setDefaultSort('id');
       $this->setDefaultDir('DESC'); 
       $this->setSaveParametersInSession(true);
       $this->setUseAjax(true);
	} 
	protected function _prepareCollection(){
	   	$coll = Mage::getModel('pharmacy/test')->getCollection();
	   	$this->setCollection($coll);
	   	return parent::_prepareCollection();
   }
    protected function _prepareColumns(){
   
   		$this->addColumn('id',
               array(
                    'header' => Mage::helper('pharmacy')->__('#'),
                    'align' =>'left',
                    'index' => 'id',
                    
              ));
   		$this->addColumn('name',
               array(
                    'header' => Mage::helper('pharmacy')->__('Name'),
                    'align' =>'left',
                    'index' => 'name',
                    
              ));
   		$this->addColumn('pname',
               array(
                    'header' => Mage::helper('pharmacy')->__('Pname'),
                    'align' =>'left',
                    'index' => 'pname',
                    
              ));
   		
   		return parent::_prepareColumns();
   }
   public function getGridUrl(){
   		 return $this->getUrl('*/*/grid', array('_current'=>true));
   }
}