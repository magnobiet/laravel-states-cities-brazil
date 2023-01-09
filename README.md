# Estados e Cidades do Brasil (Laravel)

Esta base foi criada com informações do [Instituto Brasileiro de Geografia e Estatística](https://cidades.ibge.gov.br/). Ao todo são **5570 cidades** nos **27 estados** brasileiros.

## Como usar?

### 1. Baixe

Baixe e copie as _migrations_ e _seeds_ para as respectivas pastas.

-   `database/seeds/`
-   `database/migrations`

### 2. Registre os seeds

No arquivo `DatabaseSeeder.php`, adicione a chamada dos seeds.

```php
public function run() {
    // ...omitido por brevidade
    $this->call([StatesTableSeeder::class, CitiesTableSeeder::class]);
}
```

### 3. Execute

Execute `php artisan migrate` e em seguida `php artisan db:seed` ou simplesmente `php artisan migrate --seed`.

## Outros formatos disponíveis

-   [CSV](https://github.com/magnobiet/states-cities-brazil/tree/master/CSV)
-   [HTML](https://github.com/magnobiet/states-cities-brazil/tree/master/HTML)
-   [JSON](https://github.com/magnobiet/states-cities-brazil/tree/master/JSON)
-   [PHP](https://github.com/magnobiet/states-cities-brazil/tree/master/PHP)
-   [SQL](https://github.com/magnobiet/states-cities-brazil/tree/master/SQL)

## Links úteis

-   Portal Cidades do IBGE (https://cidades.ibge.gov.br/)
-   API de localidades do IBGE (https://servicodados.ibge.gov.br/api/docs/localidades)

## Última atualização de dados

05/02/2016

## Licença

Este projeto está licenciado sob a licença [MIT](http://magno.mit-license.org/2014). Copyright © Magno Biét
