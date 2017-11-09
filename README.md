# Magento Product Attribute Table

![Demo](https://user-images.githubusercontent.com/5071467/32570682-2f685cac-c4c5-11e7-8ed4-1c344f2dcb07.png)

This module extension adds a new special attribute to products named "attributearray" and create an additional tab named "Additional Details" then add it to "Default" attribute set.
In magento backend, when you edit the product, you can add rows to a dynamic table like label => value.
When you save the product it's store a serialized value and when you retrive on frontend you have an array that you can print indipendently from the template, for example as an html table.

This allow you to store complex data in structured values that you can print as you can want indipendently from templates instead of create html code, of a table for example.

You can install it with modman or simple copy app/ directory in magento root folder.

Modman install
```
modman clone https://github.com/empiricompany/empiricompany_attributearray.git
```

To print in frontend side you can retrive its value as an array then you can iterate it to print an html table, for example:
```php
$arrayValues = $_product->getAttributearray();
if(is_array($arrayValues)){
    echo '<strong>Additional details</strong><br />';
    echo '<table width="400" border="1">';
    foreach ($arrayValues as $key => $value) { 
        echo '<tr><td>'.$value[1].'</td><td>'.$value[2].'</td></tr>';
    }
    echo '</table>';
}

```
