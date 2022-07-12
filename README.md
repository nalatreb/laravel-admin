# Demo laravel admin

## Instruction

1. Run `php artisan migrate`
2. Run `php artisan db:seed --class="WineSeeder"`

## API routes

| route | params |
| --- | --- |
| /api/v1/wines | page: ?number, per_page: ?number |
| /api/v1/wines/{$id} | - |
