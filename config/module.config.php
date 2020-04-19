<?php
namespace Psl;

return [
    'form_elements' => [
        'invokables' => [
            Form\SettingsFieldset::class => Form\SettingsFieldset::class,
        ],
        'factories' => [
            Form\Element\MediaTypeSelect::class => Service\Form\Element\MediaTypeSelectFactory::class,
        ],
    ],
    'oaipmhrepository' => [
        'metadata_formats' => [
            'factories' => [
                'psl_dc' => Service\OaiPmh\Metadata\PslDcFactory::class,
            ],
        ],
    ],
    'psl' => [
        'settings' => [
            'psl_reserved_all' => false,
            'psl_reserved_item_sets' => [],
            'psl_reserved_media_types' => [],
        ],
    ],
];
