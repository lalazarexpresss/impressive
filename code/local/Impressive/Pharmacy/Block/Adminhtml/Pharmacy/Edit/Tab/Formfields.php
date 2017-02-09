<?php 
/**
* 
*/
class Impressive_Pharmacy_Block_Pharmacy_Edit_Tab_Formfields extends Mage_Adminhtml_Block_Widget_Form
{
	
	protected function _prepareForm()
	{
		$form = new Varien_Data_Form();
		$this->setForm($form);
		$fieldset = $form->addFieldset('ffid',array('legend'=>'Test Form'));
		$fieldset->addField('name','text',array('label' =>'name','class' => 'required-entry',
                          'required' => true,'name'=>'name' ));
		return parent::_prepareForm();

	}
}