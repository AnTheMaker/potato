# potato
A simple PHP function to get environmental variables from an .env file in the current directory.

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
