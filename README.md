Symfony Playground Application
========================

The "Symfony Playground Application" with some basic geometry tasks

Requirements
------------

  * Ubuntu 20.04;
  * PHP 7.2.5 or higher;

Installation
------------

[Download Symfony][4] to install the `symfony` binary on your computer and run
this command:

```bash
$ git clone https://github.com/webad012/symfony-playground
```

Usage
-----

There's no need to configure anything to run the application. If you have
[installed Symfony][4] binary, run this command:

```bash
$ cd symfony-playground/
$ symfony server:start --no-tls
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

Tests
-----

Execute this command to run tests:

```bash
$ cd symfony-playground/
$ php bin/phpunit
```

Setup paths in suite.yml files