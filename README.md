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

* __useCountryCode__ - determines whether country code (US, GB) or country full name (United States, United Kingdom) will be used for select value

* __firstEmpty__ - determines whether an empty option should be inserted on top of select. Text can be specified using __firstText__ parameter.

* __firstText__ - specifies text for optional empty first option, by default (please select a country)

* __defaultValue__ - default pre-selected option for case __value__ is empty