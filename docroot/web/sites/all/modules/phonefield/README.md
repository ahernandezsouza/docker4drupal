# Contents of this file

* Introduction
* Requirements
* Recommended modules
* Installation
* Configuration
* Bug reports, support requests, patches
* Related modules
* Maintainers

## INTRODUCTION

The **Phone Field** project provides a phone field for Drupal 7 that
supports the HTML5 `tel:`-schema.

## REQUIREMENTS

* [**Advanced help hint**][01]:  
  To hint about getting `README.md` displayed as help.

## RECOMMENDED MODULES

* [**Advanced help**][02]:  
  When this module is enabled, additional on-screen help will be
  available when you visit `/admin/help/ah/phonefield`.
* [**Entity API**][03]:  
  When this module is enabled, you may use entity metadata wrappers.
* [**Markdown**][04]:  
  When this module is enabled, the project's `README.md` will be
  rendered by the markdown filter, making it more readable on the
  screen.
* [**User Import**][05]:  
  To import user fields containing phone numbers.

## INSTALLATION

Install as you would normally install a contributed Drupal module.
See: [Installing modules][06] for further information.

## CONFIGURATION

When you enable the module, the phone field will become available for
use (i.e. it can be added to entities).  The properties for a phone
field may be set when you add it to an entity.

For a more detailed description of the options, see the section “Using
the module” on the “General” help page.


## BUG REPORTS, SUPPORT REQUESTS, PATCHES

Help with development from the community (e.g. patches, reviews, bug
reports) are welcome.

Post bug reports, support requests, patches in the [project's issue
queue][07].

## RELATED MODULES

Depending on your requirements, you may consider one of these modules
as an alternative to this module.

* [**Phone**][08]:  
  Provides a very complex phone field, with validation and formatting
  for many the number plan om many countries.
* [**Phone Number**][09]:  
  Provides a very complex number field, with subtle differences
  compared to **Phone**.
* [**Telephone**][10]:  
  Similar to this module, as it provides an unvalidated phone field.
  However, the phone link label is not translatable, and it does not
  provide a normalized version of the phone number for searching and
  matching.

## MAINTAINERS

The project is created and maintained by [Hannemyr Nye Medier AS][11].  
The company can be contacted for paid customizations of this project
as well as general Drupal services (including installation,
development, customizations and hosting).

[01]: https://www.drupal.org/project/advanced_help_hint
[02]: https://www.drupal.org/project/advanced_help
[03]: https://www.drupal.org/project/entity
[04]: https://www.drupal.org/project/markdown
[05]: https://www.drupal.org/project/user_import
[06]: https://www.drupal.org/node/895232
[07]: https://www.drupal.org/project/issues/phonefield
[08]: https://www.drupal.org/project/phone
[09]: https://www.drupal.org/project/cck_phone
[10]: https://www.drupal.org/project/telephone
[11]: https://www.drupal.org/hannemyr-nye-medier-as
