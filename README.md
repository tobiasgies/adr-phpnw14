Action-Domain-Responder Example
===============================

This repository contains example files for my talk about the [Action-Domain-Responder](http://pmjones.github.io/adr)
design pattern at [PHP Northwest 2014](https://conference.phpnw.org.uk/phpnw14/). Please note that as of now, this is
**NOT functional code.** Most of the methods are only implemented as stubs. The code is meant to demonstrate the
principles of structuring a PHP application based on ADR, not provide a working example.

That said, here is a quick walkthrough of the directories you find here:

Common
------
Contains common files, like stubs meant to represent the Model / Domain of the application, the Request and Response
objects, and the TemplateSystem class as a generic placeholder for a template system.

Stage01
-------
This is our starting point: It contains a BlogController class that represents a Controller class from an application
structured in the typical way of current "MVC" web frameworks.

Stage02
-------
This contains the first version of our little example that is structured according to the ADR pattern: There is a
BlogCreateAction class that passes the input - if it exists - along to the Domain code and then hands the Domain's
output over to the BlogCreateResponder class, which constructs an HTTP response based on the state of the object that's
passed into it.

Stage03
-------
Here we have split up our Action class a little further: There is now one action class (BlogAddAction) that gets called
when the request is a GET request and another one called BlogCreateAction, which is responsible for POST requests. Note
that both classes can use the same Responder class.