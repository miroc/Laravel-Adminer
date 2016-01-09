# Laravel-Adminer
Laravel 5 wrapper for [Adminer](https://github.com/vrana/adminer/).
Adminer is an excellent database management tool in a single PHP file written by Jakub Vrana. It's a great replacement for PhpMyAdmin (also supports PostgreSQL, SQLite, MS SQL, Oracle, Firebird, SimpleDB, Elasticsearch and MongoDB).


## Usage
To include the library, update `composer.json` file `require` section, with:
```
"miroc/laravel-adminer": "4.2.3"
```
and run `composer update`.


To add adminer to Laravel routes (e.g. /adminer), update `routes.php` file with:
```
Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');
```

### Disabling CSRF Middleware
Adminer doesn't work with VerifyCsrfToken middleware, so it has to be disabled on its route.
#### Laravel 5.1+
In `VerifyCsrfToken.php` disable CSRF on adminer route by adding it to `$except` array:
```
protected $except = [
    'adminer'
];
```

#### Laravel 5.0
The easiest way is to create a custom VerifyCsrfToken middleware that excludes selected routes:
```
use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

class CustomVerifyCsrfToken extends VerifyCsrfToken {

    protected $excludedRoutes = ['adminer'];

	public function handle($request, Closure $next)
	{
        if ($this->isExcludedRoute($request)){
            return $next($request);
        } else {
            return parent::handle($request, $next);
        }
	}

    private function isExcludedRoute($request)
    {
        if (count($request->segments()) > 0
            && in_array($request->segment(1), $this->excludedRoutes)){
            return true;
        } else {
            return false;
        }
    }
}

```

And then use that instead of `VerifyCsrfToken` in `Kernel.php`
```
protected $middleware = [
	'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
	'Illuminate\Cookie\Middleware\EncryptCookies',
	'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
	'Illuminate\Session\Middleware\StartSession',
	'Illuminate\View\Middleware\ShareErrorsFromSession',
	'Path\To\CustomVerifyCsrfToken',
];
```


## Remarks
Due to function name conflicts of Laravel5 and Adminer, adminer.php file 
functions  'cookie()', 'redirect()' and 'view()' are prefixed with 'adm_' prefix.

If you find any problem, please let me know.
