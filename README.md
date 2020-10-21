# Laravel Stan

<p align="center">
    <img src="./banner.png" />
</p>

> Static Analysis & Testing for Laravel. Powered by PHPStan, Psalm and Pest.

## Installation

1. Require with composer: `composer require arkecosystem/stan`
2. Publish all configurations with `php artisan vendor:publish --provider="ARKEcosystem\Stan\StanServiceProvider" --tag=config`.
3. Publish all workflows with `php artisan vendor:publish --provider="ARKEcosystem\Stan\StanServiceProvider" --tag=workflows`.
4. Start tweaking the configurations as needed for your project.
