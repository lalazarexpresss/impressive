<?php
/**
  * 
  */
  class Impressive_Pharmacy_Adminhtml_impressiveController extends Mage_Adminhtml_Controller_Action
  {
  	
  	public function indexAction()
  	{
  		$this->LoadLayout()->_setActiveMenu('impressive_pharmacy/menu1')->_addBreadcrumb('my first module','my first module');
  		/*add head title*/
  		$this->getLayout()->getBlock('head')->setTitle('Impressive');
  		
  		$this->renderLayout();
  	}
  	public function gridAction(){
  		
        $this->getResponse()->setBody(
               $this->getLayout()->createBlock('pharmacy/adminhtml_pharmacy_grid')->toHtml()
        ); 

  	}
  	public function massDeleteAction(){
  		$ids = $this->getRequest()->getParam('id');
  		if(is_array($ids)):
  		$rDel =	Mage::getModel('pharmacy/test');
	  	foreach($ids as $id){
	  		$rDel->load($id)->delete();
	  	}
  		Mage::getSingleton('adminhtml/session')->addSuccess(
      
       'Total of '.count($ids).' record(s) were deleted.'
      
       );

  		else:

  		Mage::getSingleton('adminhtml/session')->addError('Please select Record.');

  		endif;

  		$this->_redirect('*/*/index');

  	}
    public function newAction(){
    $this->_forward('edit');
  }
  public function editAction(){
    $this->loadLayout();
    $this->_setActiveMenu('impressive_pharmacy/menu1');
             //$this->_addBreadcrumb('impressive ', 'Clubquestion Manager');
             //$this->_addBreadcrumb('clubquestion Description', 'Clubquestion Description');
             $this->getLayout()->getBlock('head')
                  ->setCanLoadExtJs(true);
             $this->_addContent($this->getLayout()
                  ->createBlock('pharmacy/adminhtml_pharmacy_edit')
                  ->_addLeft($this->getLayout()
                  ->createBlock('pharmacy/adminhtml_pharmacy_edit_tabs')));
             $this->renderLayout();
  }
}  