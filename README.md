# Demo laravel admin

## Instruction

> If you are using `laravel sail`, **DON'T** forget to create your `.env` file
1. Run `php artisan migrate`
2. Run `php artisan db:seed --class="WineSeeder"`

## API routes

| route | params |
| --- | --- |
| /api/v1/wines | page: ?number, per_page: ?number |
| /api/v1/wines/{$id} | - |
