<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Front-enda
Route::get('/','FrontendController@getHome');
Route::post('/','FrontendController@postHome');
Route::get('/tim-kiem','FrontendController@getSearch');
Route::get('/mua-hang/{loaisanpham}/{tensanpham}','FrontendController@getCart');
Route::get('/huy-hang/{tensanpham}','FrontendController@getDeleteCart');
Route::group(['prefix'=>'camera'],function(){
    Route::get('/','FrontendController@getCameraPage');
    Route::get('/{name}','FrontendController@getCameraCate');
    Route::get('/chi-tiet/{name}','FrontendController@getCameraDetail');
});
Route::group(['prefix'=>'laptop'],function(){
    Route::get('/','FrontendController@getLaptopPage');
    Route::get('/{name}','FrontendController@getLaptopCate');
    Route::get('/chi-tiet/{name}','FrontendController@getLaptopDetail');
});
Route::group(['prefix'=>'computer'],function(){
    Route::get('/','FrontendController@getComputerPage');
    Route::get('/{name}','FrontendController@getComputerCate');
    Route::get('/chi-tiet/{name}','FrontendController@getComputerDetail');
});
Route::group(['prefix'=>'lien-he'],function(){
    Route::get('/','FrontendController@getContactPage');
});
Route::group(['prefix'=>'gio-hang'],function(){
    Route::get('/','FrontendController@getCheckoutPage');
});





//Back-end
Route::group(['namespace'=>'Admin'],function(){
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');

    });
    Route::get('logout','HomeController@getLogout');
    Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
        Route::get('/','HomeController@getHome');
        // Camera group
        Route::group(['prefix'=>'camera'],function(){
            Route::get('/','CameraController@getIndex');
            Route::get('/add','CameraController@getAdd');
            Route::post('/add','CameraController@postAdd');
            Route::get('edit/{id}','CameraController@getEdit');
            Route::post('edit/{id}','CameraController@postEdit');
            Route::get('delete/{id}','CameraController@getDelete');

        });
        // Laptop group
        Route::group(['prefix'=>'laptop'],function(){
            Route::get('/','LaptopController@getIndex');
            Route::get('/add','LaptopController@getAdd');
            Route::post('/add','LaptopController@postAdd');
            Route::get('edit/{id}','LaptopController@getEdit');
            Route::post('edit/{id}','LaptopController@postEdit');
            Route::get('delete/{id}','LaptopController@getDelete');

        });
        // Computer group
        Route::group(['prefix'=>'computer'],function(){
            Route::get('/','ComputerController@getIndex');
            Route::get('/add','ComputerController@getAdd');
            Route::post('/add','ComputerController@postAdd');
            Route::get('edit/{id}','ComputerController@getEdit');
            Route::post('edit/{id}','ComputerController@postEdit');
            Route::get('delete/{id}','ComputerController@getDelete');

        });

        Route::group(['prefix'=>'contact'],function(){
            Route::get('/','ContactController@getContact');
            Route::get('/delete/{id}','ContactController@getDeleteContact');
        });
    });

});
