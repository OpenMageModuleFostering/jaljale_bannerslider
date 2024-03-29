<?php
	
class Jaljale_Banner_Block_Adminhtml_Slider_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "banner";
				$this->_controller = "adminhtml_slider";
				$this->_updateButton("save", "label", Mage::helper("banner")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("banner")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("banner")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("slider_data") && Mage::registry("slider_data")->getId() ){

				    return Mage::helper("banner")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("slider_data")->getId()));

				} 
				else{

				     return Mage::helper("banner")->__("Add Item");

				}
		}
}