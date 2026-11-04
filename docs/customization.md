# Customisation

*How-to guide.*

Iconoir inherit `currentColor`, so most styling happens through normal CSS.

## Colour

Regular icons stroke with `currentColor` and solid icons fill with it. Set the colour via Tailwind text utilities or inline style:

```blade
<x-ichava::icon name="ichava/icon-sets-iconoir::regular/heart" class="w-6 h-6 text-red-500" />
<x-ichava::icon name="ichava/icon-sets-iconoir::solid/heart" style="color: #ef4444" class="w-6 h-6" />
```

With the fluent helper:

```blade
{{ ichava('ichava/icon-sets-iconoir::regular/heart')->color('#ef4444')->class('w-6 h-6') }}
```

## Stroke width (regular variant only)

The regular icons set `stroke-width="1.5"` on the root element. Override it per icon:

```blade
<x-ichava::icon name="ichava/icon-sets-iconoir::regular/heart" stroke-width="2" class="w-6 h-6" />
```

## Size

The bundled SVGs are 24×24 with `viewBox="0 0 24 24"`. Use any width/height utility:

```blade
<x-ichava::icon name="ichava/icon-sets-iconoir::regular/heart" class="w-4 h-4" />
<x-ichava::icon name="ichava/icon-sets-iconoir::regular/heart" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-iconoir::regular/heart" class="w-12 h-12" />
```

## Setting a default class globally

In `config/ichava/core.php`:

```php
'components' => [
    'enabled'       => true,
    'default_class' => 'w-5 h-5 text-gray-700', // applied to every <x-ichava::icon>
],
```

Per-component `class="..."` overrides the global default.

## Accessibility

Add `aria-label` for icons that carry meaning (no adjacent text label):

```blade
<x-ichava::icon name="ichava/icon-sets-iconoir::regular/trash" aria-label="Delete" class="w-5 h-5" />
```

Decorative icons (next to a text label) can omit the label, the SPA renderer adds `aria-hidden="true"`.

## See also

- [Variants](variants.md)
- [Blade components](https://github.com/ichava/core/blob/main/docs/tools/blade-components.md)
- [Global helper](https://github.com/ichava/core/blob/main/docs/tools/global-helper.md)

---

[← Docs index](../README.md#documentation)
