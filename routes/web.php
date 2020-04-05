<?php

use Illuminate\Support\Facades\Route;

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



$modules = config("myModule.listOfModules");
// dd($modules);
$path = config("myModule.path");
// dd($path);
$base_namespace = config("myModule.base_namespace");
// dd($base_namespace);


if ($modules) {
    // dd($modules);
    foreach ($modules as $mod => $subMod) {
        // dd($mod);
        $ralativePath = '/' . $mod;
        // dd($ralativePath);
        $routesPath =  $path . $ralativePath . "/Routes/web.php";
        // var_dump($routesPath);
        if (file_exists($routesPath)) {

            Route::namespace("MyModule\\$mod\\Controller")->group($routesPath);
        };
    }
};
