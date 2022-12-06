<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;
use Symfony\Component\ErrorHandler\Debug;

/*
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed
*/

/*
Route::get('/', function () {
    /*
    try{
    throw new Exception('Try Message!');
    } catch (Exception $e){
    Debugbar::addException($e);
    }
    // Debugbar::startMeasure('Woohoo','Rendering our first message');
    */
    /*$name = "Code with Leslie";
    return view('welcome', [
    'name' => $name
    ]);
    */
   //dd(config('services.mailgun.domain'));
    /*
   return view('Welcome');
});/*
*/
// GET
Route::get('/blog', [PostsController::class, 'index']);
Route::get('/blog/{id}', [PostsController::class, 'show']);
// POST
Route::get('/blog/create', [PostsController::class, 'create']);
Route::post('/blog', [PostsController::class, 'store']);
// PUT OR PATCH
Route::get('/blog/edit/{id}', [PostsController::class, 'edit']);
Route::patch('/blog/{id}', [PostsController::class, 'update']);

//DELETE
Route::delete('/blog/{id}', [PostsController::class, 'destroy']);
//Route::resource('blog', PostsController::class);
//Route::get('/', HomeController::class);
// Multiple HTTP verbs
//Route::match (['GET', 'POST', '/blog', [PostController::class, 'index']]);
//Route::resource('blog', PostsController::class);
//Route::any('/blog', [PostsController::class, 'index']);

//Return viiew
//Route::view('/blog', 'blog.index', ['name' => 'Code with Leslie']);


// Route for invoke method

//Route::get('/', HomeController::class);


