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

## Configuring Command Handlers
The most common use case with Tactician is passing a Command to the Command Bus and having it routed to the Command Bus.

Since handlers often have extra dependencies and are best lazily-loaded, you'll want to register them in the IoC container.

Let's say we have two classes, `RegisterUserCommand` and `RegisterUserHandler`. Add the following to config/tactician.php
 
```php

return [

    'buses' => [

        'default' => [

            'commandbus' => 'League\Tactician\CommandBus',

            'middleware' => [
                // ...
            ],

            'commmands' => [

                'RegisterUser' => [
                    'command' => 'Namespace\RegisterUserCommand',
                    'handler' => 'Namespace\RegisterUserHandler'
                ],
                'RemoveUser' => [
                    'command' => 'Namespace\RemoveUserCommand',
                    'handler' => 'Namespace\RemoveUserHandler'
                ],                
                
                // ...

            ],

        ],

    ],
];

```


