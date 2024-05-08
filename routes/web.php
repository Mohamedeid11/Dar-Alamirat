<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

//Route::get('/category', function () {
//    return view('dashboard.categories.categories');
//})->name('category.index');

//Route::get('/category/create', function () {
//    return view('dashboard.categories.create_category');
//})->name('category.create');
//
//Route::get('/category/edit', function () {
//    return view('dashboard.categories.edit_category');
//})->name('category.edit');

/************************************ clients ****************************/


Route::get('/clients', function () {
    return view('dashboard.clients.clients');
})->name('client.index');


Route::get('/clients/create', function () {
    return view('dashboard.clients.create_client');
})->name('client.create');


Route::get('/clients/edit', function () {
    return view('dashboard.clients.edit_client');
})->name('client.edit');

/************************************ Orders ****************************/

// Route::get('/orders', function () {
//     return view('dashboard.orders.orders');
// })->name('order.index');

// Route::get('/orders/create', function () {
//     return view('dashboard.orders.create_order');
// })->name('order.create');


// Route::get('/orders/edit', function () {
//     return view('dashboard.orders.edit_order');
// })->name('order.edit');


// Route::get('/orders/details', function () {
//     return view('dashboard.orders.order_details');
// })->name('order.details');

/************************************ pages ****************************/

// Route::get('/pages', function () {
//     return view('dashboard.pages.pages');
// })->name('pages.index');


// Route::get('/pages/create', function () {
//     return view('dashboard.pages.create_page');
// })->name('pages.create');


// Route::get('/pages/edit', function () {
//     return view('dashboard.pages.edit_page');
// })->name('pages.edit');

/************************************ products ****************************/

Route::get('/products', function () {
    return view('dashboard.products.products');
})->name('product.index');


Route::get('/products/create', function () {
    return view('dashboard.products.create_product');
})->name('product.create');


Route::get('/products/edit', function () {
    return view('dashboard.products.edit_product');
})->name('product.edit');

Route::get('/products/details', function () {
    return view('dashboard.products.edit_details');
})->name('product.details');

/************************************ reports ****************************/

Route::get('/reports', function () {
    return view('dashboard.reports.reports');
})->name('report.index');


Route::get('/reports/create', function () {
    return view('dashboard.reports.create_report');
})->name('report.create');


Route::get('/reports/edit', function () {
    return view('dashboard.reports.edit_report');
})->name('report.edit');

/************************************ settings ****************************/

Route::get('/settings', function () {
    return view('dashboard.settings.general-settings');
})->name('settings.general-settings');
