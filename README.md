# TacticianProvider
[![Laravel](https://img.shields.io/badge/Laravel-5.0-orange.svg?style=flat-square)](http://laravel.com)
[![Build Status](https://travis-ci.org/xtrasmal/TacticianProvider.svg)](https://travis-ci.org/xtrasmal/TacticianProvider)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/xtrasmal/TacticianProvider/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/xtrasmal/TacticianProvider/?branch=master)

Laravel ServiceProvider for the Tactician library
[https://github.com/thephpleague/tactician/](https://github.com/thephpleague/tactician/)

If you are looking for a Symfony2 Bundle or want to help: [https://github.com/xtrasmal/TacticianBundle](https://github.com/xtrasmal/TacticianBundle)

## Setup 
First add this provider to your composer dependencies:

`> composer require xtrasmal\tactician-provider`

Then register it in your config/app.php.

```php
	'providers' => [
		'Xtrasmal\TacticianProvider\TacticianServiceProvider',
            // ...
```

That's it! 