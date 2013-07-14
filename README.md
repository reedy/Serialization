# Serialization

[![Latest Stable Version](https://poser.pugx.org/serialization/serialization/version.png)](https://packagist.org/packages/serialization/serialization)
[![Latest Stable Version](https://poser.pugx.org/serialization/serialization/d/total.png)](https://packagist.org/packages/serialization/serialization)
[![Build Status](https://secure.travis-ci.org/wikimedia/mediawiki-extensions-Serialization.png?branch=master)](http://travis-ci.org/wikimedia/mediawiki-extensions-Serialization)

Small library defining a Serializer and a Deserializer interface.

Also contains various Exceptions and a few basic (de)serialization utilities.

## Requirements

* PHP 5.3 or later

## Installation

You can use [Composer](http://getcomposer.org/) to download and install
this package as well as its dependencies. Alternatively you can simply clone
the git repository and take care of loading yourself.

### Composer

To add this package as a local, per-project dependency to your project, simply add a
dependency on `serialization/serialization` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
Serialization 1.0:

    {
        "require": {
            "serialization/serialization": "1.0.*"
        }
    }

### Manual

Get the Serialization code, either via git, or some other means. Also get all dependencies.
You can find a list of the dependencies in the "require" section of the composer.json file.
Load all dependencies and the load the Serialization library by including its entry point:
Serialization.php.

## Usage

### Library structure

This component contains two sub parts, one containing serialization related code, the
other holding deserializaion specific code. The former is located in the Serializers
namespace, while the later resides in the Deserializers one. Both namespaces are PSR-0
mapped onto the src directory.

### Interfaces

The primary thing provided by this library are the Serializer and Deserializer namespaces.
A set of Exceptions each process typically can encounter are also provided, and are located
in respective Exceptions namespaces. They all derive from (Des/S)erializationException.

Both interfaces define two methods: a (de)serialize method that does the actual work, and
a can(Des/S)erialize method that allows finding out if a given (de)serializer can process
a given input.

### Utilities

A DispatchingSerializer and a DispatcingDeserializer are two generally usable implementations
of the interfaces that are included in this library. They both do the same thing: contain a
list of (de)serializers and dispatch calls to the (de)serialize method to the appropriate one.
This allows for bundling multiple (de)serializers together and enables handling of nested
data with variable structure.

## Tests

This library comes with a set up PHPUnit tests that cover all non-trivial code. You can run these
tests using the PHPUnit configuration file found in the root directory. The tests can also be run
via TravisCI, as a TravisCI configuration file is also provided in the root directory.

## Authors

Serialization has been written by [Jeroen De Dauw](https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw)
as [Wikimedia Germany](https://wikimedia.de) employee for the [Wikidata project](https://wikidata.org/).

## Release notes

### 1.0

2013-07-13

* Initial release.

## Links

* [Serialization on Packagist](https://packagist.org/packages/serialization/serialization)
* [Serialization on Ohloh](https://www.ohloh.net/p/serialization-php)
* [Serialization on MediaWiki.org](https://www.mediawiki.org/wiki/Extension:Serialization)
* [TravisCI build status](https://travis-ci.org/wikimedia/mediawiki-extensions-Serialization)
* [Latest version of the readme file](https://github.com/wikimedia/mediawiki-extensions-Serialization/blob/master/README.md)
