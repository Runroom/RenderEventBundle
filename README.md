RenderEventBundle
=================

[![Latest Stable Version](https://poser.pugx.org/runroom/render-event-bundle/v/stable)](https://packagist.org/packages/runroom/render-event-bundle)
[![Latest Unstable Version](https://poser.pugx.org/runroom/render-event-bundle/v/unstable)](https://packagist.org/packages/runroom/render-event-bundle)
[![License](https://poser.pugx.org/runroom/render-event-bundle/license)](https://packagist.org/packages/runroom/render-event-bundle)

[![Total Downloads](https://poser.pugx.org/runroom/render-event-bundle/downloads)](https://packagist.org/packages/runroom/render-event-bundle)
[![Monthly Downloads](https://poser.pugx.org/runroom/render-event-bundle/d/monthly)](https://packagist.org/packages/runroom/render-event-bundle)
[![Daily Downloads](https://poser.pugx.org/runroom/render-event-bundle/d/daily)](https://packagist.org/packages/runroom/render-event-bundle)

![ci](https://github.com/Runroom/RenderEventBundle/workflows/ci/badge.svg?branch=1.x)
![qa](https://github.com/Runroom/RenderEventBundle/workflows/qa/badge.svg?branch=1.x)

## Installation

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

```
composer require runroom/render-event-bundle
```

### Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Runroom\RenderEventBundle\RenderEventBundle::class => ['all' => true],
];
```

### Update doctrine schema

Finally, execute doctrine schema update to create the new tables:

```
console doctrine:schema:update --force
```

## License

This bundle is under the [MIT license](LICENSE.md).
