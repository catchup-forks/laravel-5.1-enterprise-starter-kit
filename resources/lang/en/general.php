<?php

return [

    'button'              => [
        'cancel'            => 'Cancel',
        'close'             => 'Close',
        'save'              => 'Save',
        'create'            => 'Create',
        'delete'            => 'Delete',
        'clear'             => 'Clear',
        'edit'              => 'Edit',
        'ok'                => 'OK',
        'display'           => 'Show details',
        'replay'            => 'Replay',
        'update'            => 'Update',
        'enable'            => 'Enable',
        'enabled'           => 'Enabled',
        'disable'           => 'Disable',
        'disabled'          => 'Disabled',
        'toggle-select'     => 'Toggle checkboxes',
        'remove-role'       => 'Remove role',
    ],

    'status'              => [
        'enabled'           => 'Enabled',
        'profile'              => [
            'updated'             => 'Profile updated',
        ],
    ],

    'tabs'              => [
        'details'           => 'Details',
        'options'           => 'Options',
        'perms'             => 'Permissions',
        'users'             => 'Users',
        'roles'             => 'Roles',
        'routes'            => 'Routes',
        'data'              => 'Data',
        'profile'           => 'Profile',
    ],

    'error'              => [
        'title-403'             => 'Error 403',
        'title-404'             => 'Error 404',
        'title-500'             => 'Error 500',
        'description-403'       => '',
        'description-404'       => '',
        'description-500'       => '',
        'forbidden-403'         => 'Forbidden',
        'page-not-found-404'    => 'Page not found',
        'internal-error-500'    => 'Internal error',
        'client-error'          => 'Client error: :error-code',
        'server-error'          => 'Server error: :error-code',
        'what-is-this'          => 'What does this mean?',
        '403-explanation'       => 'The page or function that you tried to access is forbidden. The authorities have been contacted!',
        '404-explanation'       => 'The page or function that you are looking for could not be located. Try to go back to the previous page or select a new one.',
        '500-explanation'       => 'A serious problem occurred on the server, we will look at it ASAP and rectify the situation.',
        'error-proc-command'    => 'Error processing command: :cmd',
    ],

    'audit-log'           => [
        'category-login'               => 'Login',
        'category-register'            => 'Register',
        'category-profile'             => 'Profile',
        'msg-login-success'            => 'Successful login: :username.',
        'msg-login-failed'             => 'Login failed: :username.',
        'msg-forcing-logout'           => 'Forcing logout: :username.',
        'msg-registration-attempt'     => 'Registration: :username.',
        'msg-account-created-login-in' => 'Registration successful, account created, login in: :username.',
        'msg-account-created-disabled' => 'Registration successful, account created but *disabled*: :username.',
        'msg-profile-show'             => 'Showing profile of: :username.',
        'msg-profile-update'           => 'Updating profile of: :username.',
    ],

    'page'              => [
        'profile'              => [
            'title'             => 'User | Profile',
            'description'       => 'Displaying user: :full_name',
            'section-title'     => 'Profile details'
        ],
    ],

];
