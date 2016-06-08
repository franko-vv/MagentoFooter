<?php

class TestApp_Field_Block_NewField extends Mage_Core_Block_Template
{
    public function getNewField()
    {
	    $item = Mage::getModel("TestApp_Field/ModelFooter")->getNewFooterField();
	    return $item;  
    }
}