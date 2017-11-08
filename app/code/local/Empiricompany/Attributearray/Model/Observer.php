<?php
class Empiricompany_Attributearray_Model_Observer {
    public function prepareForm($observer) {
        $form = $observer->getEvent()->getForm();
        $customValues = $form->getElement('attributearray');
        if ($customValues) {
            $customValues->setRenderer(
                Mage::app()->getLayout()->createBlock('empiricompany_attributearray/adminhtml_product_custom')
            ); //set a custom renderer to your attribute
        }
    }
}