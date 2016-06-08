<?php

class TestApp_Field_Model_ModelFooter extends Mage_Core_Model_Abstract 
{  
	public function getNewFooterField() 
	{
	    $newField = 'New Field: Name';
	    return $newField;
	}
}