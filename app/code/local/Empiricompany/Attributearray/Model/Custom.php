<?php
class Empiricompany_Attributearray_Model_Custom extends Mage_Eav_Model_Entity_Attribute_Backend_Serialized {
    public function beforeSave($object) 
    {
        // Reset value
        $attributeCode = $this->getAttribute()->getAttributeCode();
        if( !Mage::app()->getRequest()->getPost('product')[$attributeCode] ){
            $object->setData($attributeCode, NULL);
        }
        return parent::beforeSave($object);
    }
}