<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-ip', function (){
    return request()->ip();
});

Route::middleware('throttle:11,1')->group(function () {
    Route::get('/profile', function () {
        return "ok";
    });
});

Route::middleware('throttle:11,1')->group(function () {
    Route::post('/addTask', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()],
                200);
        }
        logger(request()->header('User-Agent'));
        return response()->json(['response' => "Added {$request->name} to tasks."],
            200);
    });
});

Route::get('test', function (){
//    return rtrim(dirname(__DIR__), '\/');
    return "ok";
});

Route::post('laravel-pipe', function (Request $request){
   $pipes = [
       \App\Helpers\RemoveBadWords::class,
       \App\Helpers\RemoveLinks::class
   ];

//   return $request->only(['content', 'title']);

   $modifyContent = app(\Illuminate\Pipeline\Pipeline::class)
       ->send($request->only('content', 'title'))
       ->through($pipes)
       ->then(function ($content){
          return $content;
       });

    return response()->json(['response' => $modifyContent],
        200);
});



