<?php 
/**
* 
*/
class Impressive_Pharmacy_IndexController extends Mage_Core_Controller_Front_Action
{
	
	function indexAction()
	{ 
		
		$this->LoadLayout();
		//print"<pre>";
        //print_r($this->getLayout()->getUpdate()->getHandles());
      
       // print"</pre>";
		$this->renderLayout();
	}
}