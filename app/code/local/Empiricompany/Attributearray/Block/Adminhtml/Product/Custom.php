<?php
class Empiricompany_Attributearray_Block_Adminhtml_Product_Custom
    extends Mage_Adminhtml_Block_Widget
    implements Varien_Data_Form_Element_Renderer_Interface {
    public function __construct()
    {
        $this->setTemplate('empiricompany_attributearray/product/custom.phtml'); //set a template
    }
    public function render(Varien_Data_Form_Element_Abstract $element) {
        $this->setElement($element);
        return $this->toHtml();
    }
}