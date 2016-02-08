<?php

$dirThemes = __DIR__ . '/../src/themes';
$dirPrimary = __DIR__ . '/../src/primary';
$dirAccent = __DIR__ . '/../src/accent';

echo PHP_EOL . 'Start generating theme files.' . PHP_EOL;

if ($primaryHandle = opendir($dirPrimary)) {
    while (false !== ($primaryFile = readdir($primaryHandle))) {
        if (in_array($primaryFile, ['.', '..'])) {
            continue;
        }
        $primary = basename($primaryFile, '.scss');

        if ($accentHandle = opendir($dirAccent)) {
            while (false !== ($accentFile = readdir($accentHandle))) {
                if (in_array($accentFile, ['.', '..'])) {
                    continue;
                }
                $accent = basename($accentFile, '.scss');

                if ($accent === $primary) {
                    continue;
                }

                $themeFile = 'material.color.theme.' . $primary . '-' . $accent . '.scss';

                if (!file_exists($dirThemes . '/' . $themeFile)) {
                    echo ' * ' . $themeFile . PHP_EOL;

                    $content = <<<EOH
/* Theme: {$primary} - {$accent} */
@import "../primary/{$primaryFile}";
@import "../accent/{$accentFile}";
EOH;

                    file_put_contents($dirThemes . '/' . $themeFile, $content);
                }
            }
            closedir($accentHandle);
        }
    }
    closedir($primaryHandle);
}

echo PHP_EOL . 'Finished!' . PHP_EOL;
