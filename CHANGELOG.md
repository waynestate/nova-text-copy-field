# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/) and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [2.0.5] - 2023-03-27
### Fixed
* Fixed possible caching issue for users who already loaded a previous nova-ckeditor4-field version, causing their cached script not being updated when the package is updated.

## [2.0.4] - 2022-11-09
### Fixed
* Same as https://github.com/waynestate/nova-text-copy-field/pull/7 but don't display the TextCopy button to the right of the form field by @chrispelzer https://github.com/waynestate/nova-text-copy-field/pull/9

## [2.0.3] - 2022-11-08
### Fixed
* Don't display TextCopy button when the value is null, show — (em dash) instead by @chrispelzer in https://github.com/waynestate/nova-text-copy-field/pull/7

## [2.0.2] - 2022-10-26
### Fixed
* Update classes for Tailwind to be V3 compatible

## [2.0.1] - 2022-10-16
### Fixed
* Fix issue with DetailView not displaying the field correctly ([4ac8f1b](https://github.com/waynestate/nova-text-copy-field/commit/4ac8f1bb511ab4df8e8dd561f1803b98cd35c924))

## [2.0.0] - 2022-10-12
### Changed
* Nova 4 update by @chrispelzer in ([#3](https://github.com/waynestate/nova-text-copy-field/pull/3))
* Updated packagist badges
* Removed yarn.lock since this is a package and not an application

## [1.6.0] 2022-10-11
### Changed
* Took over maintenance of this package and added to Packagist to allow for easier installation.
* Updated namespaces from `Sixlive\TextCopy` to `Waynestate\Nova\TextCopy`.
* Lock Nova to < 3.* for v2.0 to have Nova 4 support.

### Fixed
* Fix issue with truncating would apply the ellipsis even if the value was not truncated.

### Added
* Added readonly field support ([#29](https://github.com/sixlive/nova-text-copy-field/pull/29))

## [1.5.0] 2019-03-03
###  Added
* Copy button to form field ([#26](https://github.com/sixlive/nova-text-copy-field/pull/26))

## [1.4.0] - 2019-01-30
### Changed
* Added missing docblocks ([#c2b0855](https://github.com/sixlive/nova-text-copy-field/commit/c2b08557fcf0299c11489590973ffcb75597ca93))

### Added
* Only showing the button on hover ([#25](https://github.com/sixlive/nova-text-copy-field/pull/25))

## [1.3.0] - 2019-01-21
### Added
* Copy button title w/override ([#18](https://github.com/sixlive/nova-text-copy-field/pull/18))
* Copy value resolver ([#19](https://github.com/sixlive/nova-text-copy-field/pull/19))

## [1.2.1] - 2018-12-06
### Changed
* Removed some unnecessary export statements ([#15](https://github.com/sixlive/nova-text-copy-field/pull/15))

## [1.2.0] - 2018-12-05
### Added
* The ability to mask the fields display value ([#13](https://github.com/sixlive/nova-text-copy-field/pull/13)]

## [1.1.0] - 2018-12-05
### Added
* Added the ability to truncate field display values ([#12](https://github.com/sixlive/nova-text-copy-field/pull/12))

## [1.0.0] - 2018-10-09
### Changed
* Updated documentation

## [0.2.0] - 2018-10-09
### Changed
* Swapped underlying cliboard libaray to use cliboard.js directly ([#6](https://github.com/sixlive/nova-text-copy-field/pull/6))
* Extracted components for felxibility and cleanup ([#7](https://github.com/sixlive/nova-text-copy-field/pull/7))
* Added support for field on a resource index ([#8](https://github.com/sixlive/nova-text-copy-field/pull/8))

## [0.1.0] - 2018-10-08
Initial release
