<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'User\Controller\Login' => 'UserController\LoginController',
            'User\Controller\Signup' => 'UserController\SignupController',
            'User\Controller\UserProfile' => 'UserController\UserProfileController',
            'User\Controller\Users' => 'UserController\UsersController'
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'login' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/login[/:method][/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\Login',
                    ),
                ),
            ),
            'signup' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/signup[/:method][/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\Signup',
                    ),
                ),
            ),
            'userprofile' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/userProfile[/:method][/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\UserProfile',
                    ),
                ),
            ),
            'users' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/users[/:method][/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'User\Controller\Users',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);