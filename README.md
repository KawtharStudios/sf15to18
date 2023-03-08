# SF15to18

Convert a 15 digit Salesforce ID to 18 digits

## Installation
This project using composer.
```
$ composer require kawtharstudios/sf15to18
```

## Usage

```php
<?php

use KawtharStudios\SF15to18;

$idAs18 = SF15to18::convert($idAs15);
```

## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create.
Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request
