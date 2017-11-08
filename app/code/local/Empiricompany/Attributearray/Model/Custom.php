<?php
class Empiricompany_Attributearray_Model_Custom extends Mage_Eav_Model_Entity_Attribute_Backend_Abstract{
    public function beforeSave($object) 
    {
        $attributeCode = $this->getAttribute()->getAttributeCode();
        $data = $object->getData($attributeCode);
        //Mage::log($data);
        if (is_array($data)) {
            //Clean Values
            foreach ($data as $key => $value) {
                if(empty($value[1]) AND empty($value[2])){
                    unset($data[$key]);
                }
            }
            $object->setData($attributeCode, serialize($data));
        }
        return parent::beforeSave($object);
    }
    public function afterLoad($object) {
        $attributeCode = $this->getAttribute()->getAttributeCode();
        $data = $object->getData($attributeCode);
        //Mage::log($data);
        if (!is_array($data)) {
            $object->setData($attributeCode, @unserialize($data));
        }
        return parent::afterLoad($object);
    }
}