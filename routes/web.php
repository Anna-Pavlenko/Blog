<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});


Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal', 'middleware'=>['auth']], function () {
    Route::group(['namespace' => 'Main','prefix'=>'main'], function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::group(['namespace' => 'Liked','prefix'=>'likeds'], function () {
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{post}', 'DeleteController')->name('personal.liked.delete');
    });
    Route::group(['namespace' => 'Comment','prefix'=>'comments'], function () {
        Route::get('/', 'IndexController')->name('personal.comment.index');
    });
});
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware'=>['auth','admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.index');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create.index');
        Route::post('/', 'StoreController')->name('admin.post.store.index');
        Route::get('/{post}', 'ShowController')->name('admin.post.show.index');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit.index');
        Route::patch('/{post}', 'UpdateController')->name('admin.post.update.index');
        Route::delete('/{post}', 'DeleteController')->name('admin.post.delete.index');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create.index');
        Route::post('/', 'StoreController')->name('admin.category.store.index');
        Route::get('/{category}', 'ShowController')->name('admin.category.show.index');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit.index');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update.index');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete.index');
    });
    
    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create.index');
        Route::post('/', 'StoreController')->name('admin.tag.store.index');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show.index');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit.index');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update.index');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete.index');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create.index');
        Route::post('/', 'StoreController')->name('admin.user.store.index');
        Route::get('/{user}', 'ShowController')->name('admin.user.show.index');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit.index');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update.index');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete.index');
    });
});
Auth::routes();


  