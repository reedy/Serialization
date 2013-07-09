[![Build Status](https://secure.travis-ci.org/JeroenDeDauw/Serialization.png?branch=master)](http://travis-ci.org/JeroenDeDauw/Serialization)

# Serialization

Small library defining a Serializer and a Deserializer interface.

Also contains various Exceptions and a few basic (de)serialization utilities.

## Installation

You can use [Composer](http://getcomposer.org/) to download and install
this package as well as its dependencies. Alternatively you can simply clone
the git repository and take care of loading yourself.

### Composer

To add this package as a local, per-project dependency to your project, simply add a
dependency on `jeroen-de-dauw/serialization` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
Serialization 1.0:

    {
        "require": {
            "jeroen-de-dauw/serialization": "1.0.*"
        }
    }

### Manual

Get the Serialization code, either via git, or some other means. Also get all dependencies.
You can find a list of the dependencies in the "require" section of the composer.json file.
Load all dependencies and the load the Serialization library by including its entry point:
Serialization.php.

## Release notes

### 1.0

* Initial release.

## Links

* [Serialization on Packagist](https://packagist.org/packages/jeroen-de-dauw/serialization)
* [Latest version of the readme file](https://github.com/JeroenDeDauw/Serialization/blob/master/README.md)
