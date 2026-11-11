# Variants

*Reference.*

`ichava/icon-sets-iconoir` ships **1,671 icons across two variants**:

- **Regular** — 1.5px `currentColor` stroke, transparent fill, round caps and joins, 24×24
- **Solid** — `currentColor` fill, 24×24

Every SVG is 24×24 with `viewBox="0 0 24 24"`. The solid set is smaller: most icons exist only as regular. Browse the library at [iconoir.com](https://iconoir.com/), or visually through the [`ichava/icon-browser`](https://github.com/ichava/icon-browser) SPA.
The Ichava integration treats each variant as a separate icon "category" under the same package, addressed by sub-path.

| Variant | Path prefix | Icons | Style |
|---|---|---|---|
| `regular` | `regular/<name>` | 1,383 | 1.5px `currentColor` stroke, transparent fill, round caps and joins, 24×24 |
| `solid` | `solid/<name>` | 288 | `currentColor` fill, 24×24 |

The default variant is `regular`. Always include the variant prefix in the icon path: `ichava/icon-sets-iconoir::regular/heart` for regular, `ichava/icon-sets-iconoir::solid/heart` for solid.

## Examples

```blade
<x-ichava::icon name="ichava/icon-sets-iconoir::regular/heart" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-iconoir::solid/heart" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-iconoir::solid/heart" class="w-6 h-6 text-red-500" />
```

## Variant enum (PHP)

```php
use Simtabi\Laranail\Ichava\IconSetsIconoir\Enums\Variant;

Variant::REGULAR->value;       // 'regular'
Variant::SOLID->value;       // 'solid'
Variant::REGULAR->isDefault(); // true
Variant::default();              // Variant::REGULAR
```

The enum implements `IconSetVariantInterface` from core, so it works wherever core's registry expects a variant.

## When to use which

- Use **regular** for navigation, controls and dense UI: it is the full library and reads lighter.
- Use **solid** for emphasis and active states. Only 288 icons have a solid drawing, so check the name exists before relying on it.

## See also

- [Customisation](customization.md), size and colour
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
