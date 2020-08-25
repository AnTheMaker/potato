# potato
A simple and lightweight (221 Bytes) PHP function to get environmental variables from an .env file in the current directory.

## Usage
.env
```
WHATEVER=I_am_hungry
NAME=potatochips
```

yourfile.php
```
<?php

include_once __DIR__.'/potato.php';

//you code

$my_variable = getenv('WHATEVER');


```
