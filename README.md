# Magento Product Attribute Table

![Demo](https://user-images.githubusercontent.com/5071467/32570682-2f685cac-c4c5-11e7-8ed4-1c344f2dcb07.png)

This module create a new special product attribute render on backend as a dynamic table.
When you save product store values in structured data and you can retrive them on frontend as array to print agnostic template table for example.

To install simple copy files in magento root or use modman as follow:
```
modman clone https://github.com/empiricompany/empiricompany_attributearray.git
```

Frontend side you can retrive values as array for example to print in table:

```php
$arrayValues = $_product->getAttributearray();
if(is_array($arrayValues)){
    echo '<strong>Additional details</strong><br />';
    echo '<table width="400" border="1">';
    foreach ($scheda as $key => $value) { 
        echo '<tr><td>'.$value[1].'</td><td>'.$value[2].'</td></tr>';
    }
    echo '</table>';
}

```
