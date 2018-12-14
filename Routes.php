<?php
return [

App\Core\Route::get('|^about/?$|',                                   'Pocetna',                 'about'),

// Admin Board
App\Core\Route::get('|^admin/index/?$|',                             'Admin',                   'index'),

App\Core\Route::get('|^login/?$|',                                   'Admin',                   'login'),
App\Core\Route::post('|^login/?$|',                                  'Admin',                   'login'),

App\Core\Route::any('|^logout/?$|',                                  'Admin',                   'logout'),

// Admin - Categories
App\Core\Route::get('|^admin/categories/?$|',                        'Admin',                   'categories'),
App\Core\Route::post('|^admin/categories/?$|',                       'Admin',                   'categories'),

App\Core\Route::get('|^admin/categories/edit/([0-9]+)/?$|',          'Admin',                   'editCategories'),
App\Core\Route::post('|^admin/categories/edit/([0-9]+)/?$|',         'Admin',                   'editCategories'),

App\Core\Route::post('|^admin/categories/delete/([0-9]+)/?$|',       'Admin',                   'deleteCategories'),

// Admin - Employees
App\Core\Route::get('|^admin/employees/?$|',                         'Admin',                   'employees'),
App\Core\Route::post('|^admin/employees/?$|',                        'Admin',                   'employees'),

App\Core\Route::get('|^admin/employees/edit/([0-9]+)/?$|',           'Admin',                   'editEmployees'),
App\Core\Route::post('|^admin/employees/edit/([0-9]+)/?$|',          'Admin',                   'editEmployees'),

App\Core\Route::post('|^admin/employees/delete/([0-9]+)/?$|',        'Admin',                  ' deleteEmployee'),

// Admin - Products 
App\Core\Route::get('|^admin/products/?$|',                          'Admin',                   'products'),
App\Core\Route::post('|^admin/products/?$|',                         'Admin',                   'products'),

App\Core\Route::get('|^admin/products/edit/([0-9]+)/?$|',            'Admin',                   'editProducts'),
App\Core\Route::post('|^admin/products/edit/([0-9]+)/?$|',           'Admin',                   'editProducts'),

App\Core\Route::post('|^admin/products/delete/([0-9]+)/?$|',         'Admin',                   'deleteProducts'),

// Admin - Cart
App\Core\Route::get('|^admin/cart/?$|',                              'Admin',                   'cart'),
App\Core\Route::post('|^admin/cart-ship/([0-9]+)/?$|',               'Admin',                   'cartShip'),

// Cart 
App\Core\Route::get('|^cart/?$|',                                    'Cart',                   'cart'),
App\Core\Route::get('|^cart-checkout/?$|',                           'Cart',                   'checkout'),
App\Core\Route::post('|^cart-thankYou/?$|',                          'Cart',                   'thankYou'),

App\Core\Route::post('|^add_cart/?$|',                               'Cart',                   'addCart'),

// This is ajax call for modal
App\Core\Route::post('|^details/?$|',                                'AjaxInfo',              'details'),
App\Core\Route::post('|^mail/?$|',                                   'AjaxInfo',              'mail'),
App\Core\Route::post('|^sendMail/?$|',                               'AjaxInfo',              'sendMail'),



// Callback page.

App\Core\Route::get('|^.*$|',                                        'Pocetna',              'index'),

















];