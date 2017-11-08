<?php
$this->addAttribute('catalog_product', 'attributearray', array(
    'group'         => 'Additional details',
    'input'         => 'textarea',
    'type'          => 'text',
    'label'         => 'Additional details',
    'backend'       => 'empiricompany_attributearray/custom',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL, 
));