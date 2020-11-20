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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
// Route::POST('/products-table', function () {
// 	// dd(Input::has('published'));
// 	// $published = Input::has('published') ? true : false;
//  // $product = product::create([
//  //            'title' =>input('title'),
//  //            'published' =>input('published')

	 
// 	//  ]);
//  //    return 'created';
// });

Route::resource('users','userscontroller');
Route::get('/edit_info/{user_id}','userscontroller@edit');

Route::resource('schoolimages','imagescontroller');
Route::resource('contact','contactscontroller');

Route::resource('schools','schoolscontroller');
Route::resource('programes','programescontroller');
Route::resource('assignments','assignmentscontroller');
Route::get('{program}/{year}/{semester}/submittedassignments','submitassignmentcontroller@index');
Route::get('/pdf/{assignment}','submitassignmentcontroller@show');

Route::resource('notes','notescontroller');

Route::resource('years','yearscontroller');
Route::get('{programe}/{year}/{semester}', 'yearscontroller@show');
Route::get('{program}/{year}/{semester}/edit', 'yearscontroller@editprogyearsem');
Route::PUT('{program}/{year}/{semester}/update', 'yearscontroller@updateprogyearsem');


Route::get('/{program}/{year}/{semester}/assignment/create','yearscontroller@createassignment');
Route::POST('/{program}/{year}/{semester}/assignments','yearscontroller@assignments');
Route::get('/{program}/{year}/{semester}/assignments','yearscontroller@viewassignments');

Route::resource('/mywork','submitassignmentcontroller');


Route::get('/{program}/{year}/{semester}/notes/create','yearscontroller@createnotes');
Route::POST('/{program}/{year}/{semester}/notes','yearscontroller@notes');
Route::get('/{program}/{year}/{semester}/notes','yearscontroller@viewnotes');

Route::resource('coments','comentscontroller');
Route::post('coments/create/{assignment}','comentscontroller@addassignmentcoment');
Route::post('coments/reply/{reply}','comentscontroller@replyassignmentcoment');


Route::get('assignment',function(){
return 'the assignment canonot be found';

});
Route::get('my-middleware',
	['middleware'=>'assignment',function(){
	
	return "ok";
	}]);



Route::resource('sports','SportsController');

Route::resource('comments','CommentsController');
Route::post('comments/create/{sport}','CommentsController@addsportComment');
Route::post('comments/reply/{reply}','CommentsController@replysportComment');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
