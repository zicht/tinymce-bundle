# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]
### Added|Changed|Deprecated|Removed|Fixed|Security
Nothing so far

## 3.0.0 - 2022-10-05
### Added
- Support for Symfony ^5.4
### Removed
- Support for Symfony 4
- Support for PHP 7.2/7.3

## 2.2.1 - 2022-01-03
### Fixed
- Revert enhancement of 2.2.0 as it seemingly duplicates the link-editor modal, which is an undesired side-effect.
### Added
- `4.9.11` version of TinyMCE.

## 2.2.0 - 2022-01-03
### Changed
- Enhanced `init.jquery.js` to use a asynchronous callback for loading the contents of the url-dropdown. This is mainly a UX-improvement.

## 2.1.1 - 2021-12-14
### Fixed
- Use Twig\Environment instead of deprecated EngineInterface

## 2.1.0 - 2021-12-08
### Added
- Support for PHP 8
### Removed
- Support for PHP 7.1

## 2.0.1 - 2021-01-08
### Added
- Re-initialize tinyMCE on 'sonata-collection-item-added' event

## 2.0.0 - 2020-05-19
### Added
- Support for Symfony 4.x
- Support for Twig 3
### Removed
- Support for Symfony 3.x
### Changed
- Removed Zicht/Bundle/TinymceBundle/ directory depth: moved all code up directly into src/

## 1.2.0 - 2020-05-19
### Changed
- Switched from PSR-0 to PSR-4 autoloading
- Updated Composer dependencies
### Fixed
- Twig deprecations
- Added all versions to CHANGELOG.md

## 1.1.9 - 2020-02-27
- [SBA-480] Ensure that TinyMCE is only initialized once per event

## 1.1.8 - 2020-01-24
- Adding proper dependencies and the proper psr-0 autoload

## 1.1.7 - 2019-10-08
- [hotfix] Re-initialize tinyMCE on 'sonata.add_element' event

## 1.1.6 - 2019-10-08
- [hotfix] Re-initialize tinyMCE on 'sonata.add_element' event
- CS

## 1.1.5 - 2018-12-05
- feedback changes
- Language_url as configuration option for the tiny MCE bundle - This allows translation overwriting.

## 1.1.4 - 2018-02-20
- fix missing fonts

## 1.1.3 - 2018-02-13
- Add languages to tinymce 4.6.4

## 1.1.2 - 2017-12-06
- removed plugins, this will be linked by the createMoxieManagerSymlinks

## 1.1.1 - 2017-10-04
- Remove symlink moxiemanager

## 1.1.0 - 2017-10-04
- feature-tinymce-upgrade - update Revert deleting 4.3.13 because of BC and dependency reasons
- feature-tinymce-upgrade Version 4.6.4 is the minimum version where the image selection issue has been solved Removed 4.13.3 because this wasn't a version where the image selection was working

## 1.0.1 - 2017-02-06
- more info on the current versioning handling.

## 1.0.0 - 2017-01-26
- Add new versions of the Tinymce-js library.
