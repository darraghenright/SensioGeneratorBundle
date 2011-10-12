#README

##Introduction

A fork of SensioGeneratorBundle adding some features 
that were present in the symfony 1.x Admin Generator:

* Column sorting
* Pagination
* Styling
* Search
* More?

##Roadmap

Currently in development. 

* Basic column sorting is added
* Basic pagination is added
* Some styles have been added. WIP.
* Search to be implemented.

##Usage

The package should already be registered in `app/autoload.php` and `app/AppKernel.php`.
If so, just drop the bundle into `vendor/bundles/Sensio/Bundle/GeneratorBundle`.

Install bundled CSS assets and images: `$ ./app/console assets:install --symlink web`

##Misc

I should probably rename/repackage as a 
different bundle if I make many more changes?

More details/updates to follow.
