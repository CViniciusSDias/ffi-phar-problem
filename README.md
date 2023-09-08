# Instructions

This project has all the necessary files to reproduce the error (on a Linux environment) when trying to import a library using PHP FFI.
This is the error message:

```
PHP Fatal error:  Uncaught FFI\Exception: Failed loading 'phar:///project_path/ffi.phar/sum.so' in phar:///project_path/ffi.phar/ffi.php:3
Stack trace:
#0 phar:///project_path/ffi.phar/ffi.php(3): FFI::cdef()
#1 /project_path/ffi.phar(12): require('...')
#2 {main}
thrown in phar:///project_path/ffi.phar/ffi.php on line 3
```

This repository already has the compiled .phar file and the shared library used to reproduce the error, but if you prefer to compile everything yourself, all the source files are also included. `sum.c` contains the library code (which is just a `sum` function) and `ffi.php` contains the PHP code that uses the library.

The _Box_ PHP component is also included to make .phar files creation easier.

If you execute `php ffi.php`, the code works perfectly, i.e., the problem only happens within .phar files.

## C code compile instructions 

On Linux, to compile the `sum.c` file into `sum.so` shared lib using gcc:

```shell
gcc -shared -fPIC -o sum.so sum.c
```

## Phar compile instructions

To use _Box_ to compile the code into a .phar file:

```shell
php box.phar compile
```
