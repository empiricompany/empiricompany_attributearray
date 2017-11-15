# Magento Product Attribute Table
Backend<br>
![Demo](https://user-images.githubusercontent.com/5071467/32837692-c0a960be-ca0e-11e7-8103-95e6c7ad75c0.gif)
Frontend<br>
![Demo](https://user-images.githubusercontent.com/5071467/32839373-7f1a576a-ca14-11e7-9187-a655eb10b594.png)

This extension allow you to store complex data, like an html table, as a structured array values.

Adds a new special attribute to products named "attributearray" and creates an additional tab named "Additional Details" then adds it to "Default" attribute set.

Backend side you can edit this value adding rows to a dynamic table like label => value.
Frontend side is added a new tab that prints this values as an html table by default.

You can override this template by copy it in your theme and editing it to match yours needs:
```
app/design/frontend/base/default/template/attributearray/render.phtml
app/design/frontend/{package}/{theme}/template/attributearray/render.phtml
```

You can install it with modman or just copy app/ directory in magento root folder.

Modman install
```
modman clone https://github.com/empiricompany/empiricompany_attributearray.git
```

