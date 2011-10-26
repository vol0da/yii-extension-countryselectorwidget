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

### Attributes ###

* __useCountryCode__ - whether use country code (US, GB) or fullname (United States, United Kingdom) as a value

* __firstEmpty__ - wheter put an empty option at the top of the select with optional text __firstText__, by default (please select a country)

* __firstText__ - text for an optional first option with empty value

* __defaultValue__ - default preselected option in case __value__ is empty