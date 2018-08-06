# Kirby Panel Brand

To separate different environments from each other, it can be useful to put a different color for each environment.

- **Version:** 0.2 beta
- **Requirement:** Kirby 3
- [Disclaimer](https://devonera.se/docs/disclaimer/?user=jenstornell&plugin=kirby-panel-brand)
- [Donate](https://devonera.se/docs/donate/?user=jenstornell&plugin=kirby-panel-brand)

<!--
![](docs/screenshot.png)
-->

## Options

For example, you can add the below to a localhost environment with `config.localhost.php`:

```php
return [
    'panel' => [
        'css' => 'panel-brand-css'
    ],
    'jenstornell.panel-brand.background' => 'yellow',
];
