<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Route;



Route::get('/' , [SiteController::class , 'index'])->name('index');

Route::middleware('auth')->group(function(){

    Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard');

    Route::middleware('admin')->group(function(){

        Route::controller(UserController::class)->group(function(){
            Route::get('/users',                'index')    ->name('users.index');
            Route::get('/users/create',         'create')   ->name('users.create');
            Route::post('/users/store',         'store')    ->name('users.store');
            Route::get('/users/{user}/edit',    'edit')     ->name('users.edit');
            Route::put('/users/{user}',         'update')   ->name('users.update');
            Route::get('/users/confirm/{id}',   'confirm')  ->name('users.confirm');
            Route::get('/users/delete/{id}',    'delete')   ->name('users.delete');
            Route::get('/users/search',         'search')   ->name('users.search');
            Route::post('/users/search',        'findUser') ->name('users.find');
            Route::get('/users/{user}/show',    'show')     ->name('users.show');
            Route::put('/users/password/{user}', 'password') ->name('users.password');
        });

        Route::controller(RoleController::class)->group(function(){
            Route::get('/roles',                      'index')            ->name('roles.index');
            Route::get('/roles/create',               'create')           ->name('roles.create');
            Route::post('/roles/store',               'store')            ->name('roles.store');
            Route::get('/roles/{role}/edit',          'edit')             ->name('roles.edit');
            Route::put('/roles/{role}',               'update')           ->name('roles.update');
            Route::get('/roles/confirm/{id}',         'confirm')          ->name('roles.confirm');
            Route::get('/roles/delete/{id}',          'delete')           ->name('roles.delete');
            Route::post('/roles/{role}/permissions/', 'assignPermission') ->name('roles.permissions');
        });

        Route::controller(AuditController::class)->group(function(){
            Route::get('/audits',                'index')    ->name('audits.index');
            Route::get('/audits/search',         'search')   ->name('audits.search');
            Route::post('/audits/search',        'find')     ->name('audits.find');
            Route::get('/audits/{audit}/show',   'show')     ->name('audits.show');
        });

    });
      
    Route::controller(SupplierController::class)->group(function(){
        Route::get('/suppliers',                 'index')   ->name('suppliers.index');
        Route::get('/suppliers/create',          'create')  ->name('suppliers.create');
        Route::post('/suppliers/store',          'store')   ->name('suppliers.store');
        Route::get('/suppliers/{supplier}/edit', 'edit')    ->name('suppliers.edit');
        Route::put('/suppliers/{supplier}',      'update')  ->name('suppliers.update');
        Route::get('/suppliers/confirm/{id}',    'confirm') ->name('suppliers.confirm');
        Route::get('/suppliers/delete/{id}',     'delete')  ->name('suppliers.delete');
    });

    Route::controller(CustomerController::class)->group(function(){
        Route::get('/customers',                 'index')   ->name('customers.index');
        Route::get('/customers/create',          'create')  ->name('customers.create');
        Route::post('/customers/store',          'store')   ->name('customers.store');
        Route::get('/customers/{customer}/edit', 'edit')    ->name('customers.edit');
        Route::put('/customers/{customer}',      'update')  ->name('customers.update');
        Route::get('/customers/confirm/{id}',    'confirm') ->name('customers.confirm');
        Route::get('/customers/delete/{id}',     'delete')  ->name('customers.delete');
    });

    Route::controller(UnitController::class)->group(function(){
        Route::get('/units',                 'index')   ->name('units.index');
        Route::get('/units/create',          'create')  ->name('units.create');
        Route::post('/units/store',          'store')   ->name('units.store');
        Route::get('/units/{unit}/edit',     'edit')    ->name('units.edit');
        Route::put('/units/{unit}',          'update')  ->name('units.update');
        Route::get('/units/confirm/{id}',    'confirm') ->name('units.confirm');
        Route::get('/units/delete/{id}',     'delete')  ->name('units.delete');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/categories',                 'index')   ->name('categories.index');
        Route::get('/categories/create',          'create')  ->name('categories.create');
        Route::post('/categories/store',          'store')   ->name('categories.store');
        Route::get('/categories/{category}/edit', 'edit')    ->name('categories.edit');
        Route::put('/categories/{category}',      'update')  ->name('categories.update');
        Route::get('/categories/confirm/{id}',    'confirm') ->name('categories.confirm');
        Route::get('/categories/delete/{id}',     'delete')  ->name('categories.delete');
        Route::get('/categories/get/',            'get')     ->name('categories.get');
    });

    Route::controller(ProductController::class)->group(function(){
        Route::get('/products',                 'index')   ->name('products.index');
        Route::get('/products/create',          'create')  ->name('products.create');
        Route::post('/products/store',          'store')   ->name('products.store');
        Route::get('/products/{product}/edit',  'edit')    ->name('products.edit');
        Route::put('/products/{product}',       'update')  ->name('products.update');
        Route::get('/products/confirm/{id}',    'confirm') ->name('products.confirm');
        Route::get('/products/delete/{id}',     'delete')  ->name('products.delete');
    });

    Route::controller(PurchaseController::class)->group(function(){ 
        Route::get('/purchases',                 'index')   ->name('purchases.index');
        Route::get('/purchases/create',          'create')  ->name('purchases.create');
        Route::post('/purchases/store',          'store')   ->name('purchases.store');
        Route::get('/purchases/{purchase}/edit',  'edit')   ->name('purchases.edit');
        Route::put('/purchases/{purchase}',       'update') ->name('purchases.update');
        Route::get('/purchases/confirm/{id}',    'confirm') ->name('purchases.confirm');
        Route::get('/purchases/delete/{id}',     'delete')  ->name('purchases.delete');
    });

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile' ,                 'index')          ->name('profile.index');
        Route::put('/profile/{user}' ,          'update')         ->name('profile.update');
        Route::get('/profile/password' ,        'password')       ->name('profile.password');
        Route::put('/profile/password/{user}' , 'updatePassword') ->name('profile.update.password');
    });

});

require __DIR__.'/auth.php';
