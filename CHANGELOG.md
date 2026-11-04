# Changelog

All notable changes to `ichava/icon-sets-iconoir` follow [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) and [Semantic Versioning](https://semver.org/).

## [Unreleased]

### Added

- **Initial release.** 1,671 Iconoir SVGs vendored from `iconoir` 7.12.2 (`regular` (1,383) and `solid` (288)), sanitised by `ichava/icon-sets-sync`'s SVG policy, with the upstream MIT licence in `resources/assets/svg/licenses/iconoir/LICENSE` and its SHA-256 recorded under `license` in `resources/assets/svg/config.json`.
- `ATTRIBUTION.md` carries the upstream notice verbatim; `tests/Unit/IconCountTest.php` holds the per-variant count floor at the upstream count.
- The weekly `sync-upstream.yml` is a caller of icon-sets-sync's reusable `sync-pack.yml`, pinned to a commit.
