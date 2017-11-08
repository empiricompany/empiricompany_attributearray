# Magento Product Attribute Table
Create new custom attribute in magento and store / retrive as array

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
