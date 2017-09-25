<?php
return array(
	'router' => array(
        'routes' => array(
            'users' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/users[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Users\Controller\Users',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
	'controllers' => array(
		'invokables'=> array(
				'Users\Controller\Users' => 'Users\Controller\UsersController',
                //khi và o url user/new chuyển sang newcontroller để xử lí
				'Users\Controller\Register' => 'Users\Controller\RegisterController',
			)
	),
	'view_manager' => array(
		'template_path_stack' => array(__DIR__.'/../view'),
	),
);