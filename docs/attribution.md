# Attribution and licence

*Reference.*

## Upstream

[Iconoir](https://iconoir.com/) is created and maintained by Luca Burgio and the Iconoir contributors. Source: [github.com/iconoir-icons/iconoir](https://github.com/iconoir-icons/iconoir).

## Licence

The icons and this package are owned separately, and both are under the **MIT License**:

- **The icons** are © Luca Burgio and the Iconoir contributors, [MIT](https://github.com/iconoir-icons/iconoir/blob/main/LICENSE). Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

MIT allows commercial and non-commercial use, modification and redistribution, provided the copyright notice and permission notice accompany every copy. That is a condition, not a courtesy: the upstream notice is reproduced in [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root, which ships in the dist archive (`docs/` does not). Keep it with the icons if you copy them out of the package.

A few icons depict third-party brands. Those marks belong to their owners; see [`ATTRIBUTION.md`](../ATTRIBUTION.md#brand-icons).

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Iconoir](https://iconoir.com/) by Luca Burgio (MIT)

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync).
Cron polls `iconoir` on npm, refreshes the bundled SVGs when
upstream moves, and opens a PR. A human reviews + tags a release;
Packagist + `composer update` fans the change out.

End users **don't** refresh locally -- `vendor/` is regenerated on every
`composer install`, so any local change is discarded. Run
`php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-iconoir`
to see whether a new upstream version is available.

## See also

- [Iconoir website](https://iconoir.com/)
- [Iconoir GitHub](https://github.com/iconoir-icons/iconoir)

---

[← Docs index](../README.md#documentation)
