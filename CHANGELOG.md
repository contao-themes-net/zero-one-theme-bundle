# Changelog

[//]: <> (
Types of changes
    Added for new features.
    Changed for changes in existing functionality.
    Deprecated for soon-to-be removed features.
    Removed for now removed features.
    Fixed for any bug fixes.
    Security in case of vulnerabilities.
)

## [2.4.2](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.4.2) – 2025-03-21

- [Fixed] Updated scssphp dependency to 1.0 for Contao 5.5 compatibility

## [2.4.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.4.1) – 2024-10-16

- [Fixed] Fix new css generation with every page request
- [Fixed] Fix header search field

## [2.4.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.4.0) – 2024-08-16

- [Added] Changelanguage dropdown
- [Fixed] Uuid is null in Twig file extension

## [2.3.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.3.1) – 2024-03-14

- [Changed] Change image position in the megamenu

## [2.3.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.3.0) – 2024-03-08

- [Added] Add mega menu (new templates `mod_navigation_megamenu_zeroone` and `nav_default_megamenu_zeroone`)
- [Changed] Update sql files for contao 5.3

## [2.2.2](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.2.2) – 2023-10-11

- [Fixed] Replace InsertTag for request token in form_wrapper template

## [2.2.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.2.1) – 2023-08-01

- [Fixed] Fix mobile dropdown menu

## [2.2.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.2.0) – 2023-06-27

- [Changed] Change mobile dropdown menu
- [Changed] Change font sizes from px/rem to em

## [2.1.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.1.0) – 2023-02-15

- [Added] Use css classes to add a background color to an article
- [Added] Add fade effect to carousel
- [Added] Add sql files for Contao 5.1
- [Fixed] Replace InsertTag `{{request_token}}` with `<?= $this->requestToken ?>`
- [Fixed] Optimize dark mode
- [Fixed] Optimize backend setup page in dark mode (>= Contao 5.1)

## [2.0.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.0.1) – 2022-11-04

- [Changed] Change migration order
- [Fixed] fix for using `$GLOBALS['CUSTOM_STYLES']`

## [2.0.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/2.0.0) – 2022-10-28

- [Added] Add migrations for demo data import (Setup without further steps, install and run migrations -> Done!)
- [Changed] Increase Contao version to 5 and increase PHP version to 8.1
- [Removed] Cleanup older Contao SQL files

## [1.13.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.12.0) – 2024-03-08

- [Added] Add mega menu (new templates `mod_navigation_megamenu_zeroone` and `nav_default_megamenu_zeroone`)
- [Changed] Update sql files for contao 4.13

## [1.12.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.12.1) – 2023-08-01

- [Fixed] Fix mobile dropdown menu

## [1.12.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.12.0) – 2023-06-27

- [Changed] Change font sizes from px/rem to em
- [Changed] Change mobile dropdown menu

## [1.11.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.11.0) – 2023-02-15

- [Added] Use css classes to add a background color to an article
- [Added] Add fade effect to carousel
- [Fixed] Optimize dark mode
- [Changed] Update sql files for contao 4.13

## [1.10.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.10.0) – 2022-10-07

- [Added] now you can use `$GLOBALS['CUSTOM_STYLES']` in templates to add scss files from files/zeroOne/scss
- [Changed] now require terminal42/contao-folderpage version 2.* or 3.*

## [1.9.2](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.9.2) – 2022-09-09

- [Fixed] fix bug in demo data

## [1.9.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.9.1) – 2022-03-07

- [Added] add support for Symfony 5 public entry point
- [Fixed] update fe_page template

## [1.9.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.9.0) – 2022-02-17

- [Added] add sql files for contao 4.13

## [1.8.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.8.0) – 2021-08-25

- [Added] add sql files for contao 4.12

## [1.7.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.7.0) – 2021-05-28

- [Added] add accordion template and styling (pure css)
- [Fixed] add the highlight style sheet for ce_code ([#15](https://github.com/contao-themes-net/zero-one-theme-bundle/issues/15))

## [1.6.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.6.1) – 2021-05-05

- [Added] php 8 support
- [Fixed] fix undefined array index errors

## [1.6.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.6.0) – 2021-04-01

- [Added] add login template with placeholders

## [1.5.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.5.0) – 2021-03-09

- [Added] add content box ([docs](https://pdir.de/docs/de/contao/themes/zeroone/elements/contentbox/))
- [Added] add price table ([docs](https://pdir.de/docs/de/contao/themes/zeroone/elements/pricebox/))
- [Added] add pure css carousel ([docs](https://pdir.de/docs/de/contao/themes/zeroone/elements/carousel/))
- update demo sql files

## [1.4.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.4.0) – 2020-02-12

- [Added] add sql files for contao 4.11

## [1.3.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.3.1) – 2020-12-14

- [Fixed] update theme tags config

## [1.3.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.3.0) – 2020-11-12

- [Fixed] fix scss paths for colour schemes in _custom_variables.scss
- [Added] add templates and styling for member modules (login, registration, personal data, lost and change password)
- [Added] update sql files

## [1.2.8](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.8) – 2020-10-07

- [Fixed] update sql files

## [1.2.7](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.7) – 2020-10-02

- [Fixed] update fe_page template

## [1.2.6](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.6) – 2020-08-19

- [Added] add sql files for contao 4.10.0
- [Fixed] fix bug: version is hidden if you click to synchronize theme files

## [1.2.5](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.5) – 2020-08-19

- [Fixed] fix new css generation with every page request

## [1.2.4](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.4) – 2020-06-12

- [Added] add templates for news and events to hide the left column

## [1.2.3](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.3) – 2020-05-26

- [Fixed] moved stylesheets to top of document

## [1.2.2](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.2) – 2020-05-20

- [Fixed] fix error with multiple tabs
- [Added] add option to set a default tab page

## [1.2.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.1) – 2020-03-11

- [Added] add variable for mobile navbar breakpoint

## [1.2.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.2.0) – 2020-03-10

- [Fixed] fix scss paths for local installation on windows
- [Added] update navigation
- [Added] add variable border-radius to _custom_variables.scss

## [1.1.2](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.1.2) – 2020-03-02

- [Fixed] css fix for navbar

## [1.1.1](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.1.1) – 2020-02-25

- [Fixed] ie11 fixes

## [1.1.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.1.0) – 2020-02-21

- [Fixed] update sql file for contao 4.9
- [Added] add minimal sql file for contao 4.9

## [1.0.0](https://github.com/contao-themes-net/zero-one-theme-bundle/tree/1.0.0) – 2020-02-03

- first stable release
