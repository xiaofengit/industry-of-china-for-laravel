# Region of China for Laravel
The package to create industries of china for Laravel or Lumen.
适用于Laravel，用于生成中国行业数据拓展包。
- 2017年国民经济行业分类（GB/T 4754—2017）

## Install
### Install via compser

Run the following command to pull in the lastest version:

`composer require xiaofengit/industry-of-china-for-laravel`


### Add service provider (Laravel 5.4 or below):

Add the service provider to the providers array in the config/app.php config file as follows:

```
    'providers' => [

        ...

        Xiaofengit\IndustryOfChinaForLaravel\LaravelServiceProvider::class,
    ]
```

if you using Laravel 5.5 or higher, the provider will auto load.

### Publish the files

Run the following command to publish the package config file:

`php artisan vendor:publish --provider="Xiaofengit\IndustryOfChinaForLaravel\LaravelServiceProvider"`

### Create the table if you needs
Run the following command to create regions table:

`php artisan migreate`

### Seed data
Run the following command to seed data:

`php artisan db:seed --class="Database\Seeders\IndustrySeeder"`

Or
import the data from sql file: 
`xiaofengit/industry-of-china-for-laravel/data/insert_industry.sql`


## License
It's open-sourced software licensed under the MIT license.
