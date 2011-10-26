Installation
-----------

Put the CountrySelectorWidget.php file under the extensions/ subdirectory of application base directory.

Usage
-----

```php
<?php

$this->widget('application.extensions.countrySelectorWidget', array(
    'value' => $model->country,
    'name' => Chtml::activeName($model, 'country'),
    'id' => Chtml::activeId($model, 'country'),
    'useCountryCode' => false,
    'defaultValue' => 'Japan',
    'firstEmpty' => false,
));

?>
```