# Laravel-Adminer
Laravel 5 wrapper for Adminer.
Adminer is an excellent database management in a single PHP file written by Jakub Vrana.


## Usage
To include the library, update `composer.json` file `require` section, with:
```
"miroc/laravel-adminer": "dev-master"
```

To add adminer to Laravel routes (e.g. /adminer), update `routes.php` file with:
```
Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');`
```

### Remarks
Due to function name conflicts of Laravel5 and Adminer, adminer.php file 
functions  'cookie()', 'redirect()' and 'view()' are prefixed with 'adm_' prefix.

If you find any problem, please let me know.
