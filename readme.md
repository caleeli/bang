## Primeros pasos
cp .env.example .env                                                                                                                                                                                          12:29:40
php artisan key:generate
vi .env
php artisan serve --port 8084

## Contributing

PHP Code styling PSR4
Para cada ticket se recomienda crear un branch a partir del nombre con el siguiente nombre: feature-id_ticket
Por ejemplo:
Para el ticket 12 seria:
```
git checkout -b feature-12 master
```

Si los tickets corresponden a bugs (bug-id)
Si son hotfixes (hotfix-id)

