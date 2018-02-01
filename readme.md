# variable scope in php

Php variable has 3 type of scope     

* global 
* local
* static

### global     
any variable which declare outside function is in global scope      
~~~php
$name = 'polo dev';
~~~

## local scope
any variable declare inside function is in local scope     

~~~php
function hello() {
  $fruit = 'mango'; //local
}
~~~

Here `$fruit` declare inside function. So its a local variable     

## How to access global variable inside a function      

We can access global variable inside function using `global` keyword or `$GLOBALS` super global.         

accessing global variable locally using `global` keyword     

~~~php
$name = 'polo dev';
function hello() {
  global $name;
  echo $name;
}
~~~

accessing global variable locally using $GLOBALS super global       

~~~php
$name = 'polo dev';
function hello() {
  echo $GLOBALS['name'];
}
~~~


## static scope

To write variable in static scope we write `static` keyword before variable name.  static variable won't be deleted after execution. Since it holds its earlier value so we can reuse it for future use.     

~~~php
function birthDay() {
  static $age = 0;
  echo '<br/>';
  $age++;
  echo $age;
}

birthDay(); //1
birthDay(); //2
birthDay(); //3
birthDay(); //4
birthDay(); //5
~~~


