<?php
return array(
	'router' => array(
        'routes' => array(
            'admin' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Admin',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
	'controllers' => array(
		'invokables'=> array(
				'Admin\Controller\Admin' => 'Admin\Controller\AdminController',
			)
	),
	'view_manager' => array(
		'template_path_stack' => array(__DIR__.'/../view'),
        
	),
);