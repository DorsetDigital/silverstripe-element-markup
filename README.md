# silverstripe-element-markup
Allows the creation of an arbitrary markup block in SilverStripe Elemental

[![License](https://img.shields.io/badge/License-BSD%203--Clause-blue.svg)](LICENSE.md)

# Requirements
* Silverstripe 4.x
* Silverstripe Elemental

# Installation
* Install the code with `composer require dorsetdigital/silverstripe-element-markup`
* Run a `dev/build?flush` to update your project

# Usage
Once installed, 'Markup' will be selectable an Elemental block.

The module is designed to allow you to add any arbitrary markup to a page, avoiding the normal tag restrictions imposed by the HTMLText Editor.

# WARNING

This module does not perform any markup validation or testing.  It will add the markup to the page as-entered.

If you enter broken markup, or markup which contains bad code, your page might break!

*With great power comes great responsibility*


