<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Authentication Configuration
|--------------------------------------------------------------------------
|
| This file contains various configuration settings for authentication system
|
*/

$config['auth'] = [
    // Minimum password length
    'min_password_length' => 8,

    // Maximum login attempts before temporary block
    'max_login_attempts' => 5,

    // Lock time after max login attempts (in minutes)
    'lock_time' => 15,

    // Verification token expiry (in hours)
    'verification_expiry' => 24,

    // Reset token expiry (in hours)
    'reset_token_expiry' => 1,

    // Session expiry (in hours)
    'session_expiry' => 24,

    // Remember me expiry (in days)
    'remember_expiry' => 30,

    // Password requirements
    'password_requirements' => [
        'min_length' => 8,
        'require_uppercase' => true,
        'require_numeric' => true,
        'require_special_char' => true
    ],

    // Login redirect routes
    'redirect_routes' => [
        'admin' => 'admin/dashboard',
        'user' => 'user/dashboard',
        'default' => 'home'
    ],

    // Auth routes
    'routes' => [
        'login' => 'auth/login',
        'register' => 'auth/register',
        'forgot_password' => 'auth/forgot-password',
        'reset_password' => 'auth/reset-password',
        'verify_email' => 'auth/verify-email'
    ]
];
