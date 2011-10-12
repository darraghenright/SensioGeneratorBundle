#README

##Introduction

A fork of SensioGeneratorBundle adding some features 
that were present in the symfony 1.x Admin Generator:

* Column sorting
* Pagination
* Styling
* Search
* More?

###Todo/Issues

* Add column generation for relations
* Add column sorting for relations
* Fix column name generation (decamelize)
* Fix titles
* Fix up styles bug time

##Progress

Currently in development. 

* Basic column sorting is added
* Basic pagination is added
* Some styles have been added. WIP.
* Search to be implemented.

##Usage

The package should already be registered in `app/autoload.php` and `app/AppKernel.php`.
If so, just drop the bundle into `vendor/bundles/Sensio/Bundle/GeneratorBundle`.

Or, update `deps` and `deps.lock` before running `php bin/vendors install`

If styles are not showing install bundled CSS assets and images: 
`$ ./app/console assets:install --symlink web`

##Misc

I should probably rename/repackage as a 
different bundle if I make many more changes?

CUrrently using symfony 1.x Admin Generator 
assets. Look into the license or get new assets.

More details/updates to follow. Yadda yadda...
