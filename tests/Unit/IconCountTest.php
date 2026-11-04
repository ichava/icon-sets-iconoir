<?php

declare(strict_types=1);

/**
 * The vendored set is complete: every variant directory holds at least the
 * number of SVGs upstream iconoir 7.12.2 ships for it, after the
 * exclusions ATTRIBUTION.md lists. A sync that silently drops icons fails here.
 */
function iconoir_files(): string
{
    return dirname(__DIR__, 2) . '/resources/assets/svg/files';
}

/** @return array<string, int> variant => SVG count at upstream 7.12.2 */
function iconoir_count_floor(): array
{
    return [
        'regular' => 1383,
        'solid'   => 288,
    ];
}

it(description: 'ships at least the upstream count in every variant', closure: function () {
    foreach (iconoir_count_floor() as $variant => $floor) {
        $count = count(glob(iconoir_files() . "/{$variant}/*.svg") ?: []);
        expect($count)->toBeGreaterThanOrEqual($floor, "{$variant} holds {$count} SVGs, under the floor of {$floor}");
    }
});

it(description: 'ships no directory the variants do not name', closure: function () {
    $dirs = array_map('basename', glob(iconoir_files() . '/*', GLOB_ONLYDIR) ?: []);
    sort($dirs);
    $expected = array_keys(iconoir_count_floor());
    sort($expected);
    expect($dirs)->toBe($expected);
});
