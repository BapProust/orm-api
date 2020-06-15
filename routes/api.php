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

Route::apiResource('employees', 'EmployeeApiController');
Route::apiResource('departments', 'DepartmentApiController');
Route::apiResource('titles', 'TitleApiController');
Route::apiResource('salaries', 'SalaryApiController');

Route::get('/redirect', function() {
	$query = http_build_query([
		'client_id' => '3',
		'redirect_uri' => 'http://192.168.110.134/test',
		'response_type' => 'code',
		'scope' => 'place-orders check-status',
	]);

	return redirect('http://192.168.110.134/oauth/authorize?'.$query);
});
