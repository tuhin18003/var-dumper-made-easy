Advance Var Dumper Component
==============================

The Advance Var Dumper component provides mechanisms for walking through any arbitrary
PHP variable. It provides a better `pre_print()` function that you can use instead
of `print_r()`.


## Install

Via Composer

``` bash
$ composer require --dev tuhin18003/advance-var-dumper
```

## Usage

```
require './vendor/autoload.php';
```

It takes 2 parameters. First one is your data `( array/ object/ string)` and second can be any `string` as flag!

`pre_print( $data = '', $text = '' )`

```
$arr =['test','te1','hello'];

pre_print($arr);
```

## Output

```
------------------------------DEBUG MODE START------------------------------

File Name: E:\webApps\xampp-new-64\htdocs\my-websites\custom-scripts\myScripts.php
Line No: 30

Array
(
    [0] => test
    [1] => te1
    [2] => hello
)


------------------------------DEBUG MODE END------------------------------
```

### Credentials
- *Created by - [M.Tuhin](https://codesolz.net/)*

<a href="https://codesolz.net">
  <img src="https://codesolz.net/images/brand-logo/logo.png" alt="codesolz.net"/>
</a>

