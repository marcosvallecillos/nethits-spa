<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/flex-objects/nethits-spa/user/plugins/flex-objects/blueprints/flex-objects/pages.yaml',
    'modified' => 1747643265,
    'size' => 545,
    'data' => [
        'title' => 'Pages (Admin)',
        'description' => 'Manage your Grav Pages in the new Flex Pages admin. This allows you to use Flex Pages only in Admin plugin, while still using the old pages in the frontend.',
        'type' => 'flex-objects',
        'extends@' => [
            'type' => 'pages',
            'context' => 'blueprints://flex'
        ],
        'form' => [
            'fields' => [
                'lang' => [
                    'type' => 'hidden',
                    'value' => ''
                ],
                'tabs' => [
                    'fields' => [
                        'security' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.SECURITY',
                            'import@' => [
                                'type' => 'partials/security',
                                'context' => 'blueprints://pages'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
