<?php
Kirby::plugin('jenstornell/panel-brand', [
    'options' => [
        'background' => '#c53e3a',
    ],
    'routes' => [
        [
            'pattern' => 'panel-brand-css',
            'action' => function() {
                $css = file_get_contents(__DIR__ . '/assets/css/style.css');

                $replacements = [
                    '{{ background }}' => option('jenstornell.panel-brand.background'),
                ];

                return new Response(strtr($css, $replacements), 'text/css');
            }
        ]
    ]
]);