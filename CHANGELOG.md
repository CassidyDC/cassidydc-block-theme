# Changelog for CassidyDC Block Theme

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

<!-- ## [Unreleased] -->

## [3.0.0] - 2026-03-21

### Added

-   Added `assets/images/favicons` and `assets/images/logos` directories.
-   Added starter patterns structure.

### Changed

-   Refactored and updated starting functions files.
-   Refactored source file structure.
-   Updated namespaces.
-   Updated scheme version and file formatting for `theme.json`.
-   Updated starting source stylesheets and scripts.
-   Updated the 404 template with pattern.
-   Updated theme details.

### Removed

-   Removed SCSS files and replaced with native nested CSS.

## [2.3.0] - 2026-03-21

### Added

-   Added `front-page.html` template to use when the homepage is not a blog and differs from a normal page template.
-   Added new properties to `theme.json` and set to false.

### Changed

-   Formatted SCSS files with CassidyDC Toolset package.
-   Updated GitHub repo URL to match move from personal account to CassidyDC.
-   Updated name from "CassidyDC WP Starter Block Theme" to "CassidyDC Block Theme".
-   Updated namespaces and slugs to remove "WP Starter".

## [2.2.0] - 2025-02-01

### Changed

-   Added local development tooling files to .gitignore
-   Refactored declaration for `$last_prop` dynamic variable in `assets-process.php`.
-   Refactored PHP file with updated names (namespaces, slugs, text-domains, etc) and types with PHPStan.
-   Replaced deprecated `@import` rule with `@use` in SCSS files.
-   Updated $schema version in `theme.json` for WP v6.7
-   Updated config function names in `assets-config.php`, `assets-enqueue.php`, and `assets-register.php` for clarity.
-   Updated default page template file (`/templates/page.html`).
-   Updated theme's screenshot.png file with name update.

## [2.1.0] - 2024-11-24

### Added

-   Added theme `screenshot.png`.
-   Added theme build files.

### Changed

-   Updated @wordpress/script package and npm overrides for packages with vulnerability.

## [2.0.0] - 2023-09-26

### Changed

-   Updated theme for enterprise-level development with WordPress v6.6, including full linting, formatting, and build processes.
-   Updated `theme.json` with all default top level settings available for WP v6.6.

## [1.0.0] - 2023-07-23

### Added

-   Starter theme files with all block options set to false. Allowing you to turn on only what you need for a clean editor experience.
