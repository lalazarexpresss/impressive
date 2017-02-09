<?php  
/**
* 
*/
class Impressive_Pharmacy_Block_Adminhtml_Pharmacy_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
	
	public function __construct()
   { 
        parent::__construct();
        $this->setId('phid');
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
   		$this->addColumn('age',
               array(
                    'header' => Mage::helper('pharmacy')->__('Age'),
                    'align' =>'left',
                    'index' => 'age',
                    
              ));
   		return parent::_prepareColumns();
   }
   public function getGridUrl(){
   		 return $this->getUrl('*/*/grid', array('_current'=>true));
   }
   /*delete multiple record*/
   protected function _prepareMassaction()
	    {
	      $this->setMassactionIdField('id');
	      $this->getMassactionBlock()->setFormFieldName('id');
	       
	      $this->getMassactionBlock()->addItem('delete', array(
	      'label'=> 'Delete',
	      'url'  => $this->getUrl('*/*/massDelete', array('' => '')),        // public function massDeleteAction() in Mage_Adminhtml_Tax_RateController
	      'confirm' => 'Are you sure?'
	      ));
	      return $this;
      

    }
}