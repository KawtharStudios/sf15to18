![Made With](https://img.shields.io/badge/made_with-php-blue)
[![Packagist](https://img.shields.io/packagist/v/kawtharstudios/sf15to18)](https://packagist.org/packages/kawtharstudios/sf15to18/)
[![Packagist Downloads](https://img.shields.io/packagist/dm/kawtharstudios/sf15to18.svg?label=packagist%20downloads)](https://packagist.org/packages/kawtharstudios/sf15to18)

# SF15to18

Convert a 15 digit Salesforce ID to 18 digits

## Installation
```
composer require kawtharstudios/sf15to18
```

## Usage

```php
<?php

use KawtharStudios\SF15to18;

$idAs18 = SF15to18::convert($idAs15);
```

## Contributing

Contributions are what make the community such an amazing place to learn, inspire, and create.
Any contributions you make is **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/amazing-feature`)
3. Commit your Changes (`git commit -m 'Add some amazing-feature'`)
4. Push to the Branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request with a detailed description
