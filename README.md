# Setup and demo project

Install dependencies

```bash
composer install
```

Run localhost

```bash
php artisan serve
```

Open browser at [http://localhost:8000](http://localhost:8000)

Set 1:
    url: http://localhost:8000
        controller: \App\Http\Controllers\IndexController

        
Set 2:
    url: http://localhost:8000/charge?transId=
        controller: \App\Http\Controllers\ChargesController