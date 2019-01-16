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


/****************************************************************************************/
/* 						 			Web Sites 											*/
/****************************************************************************************/
Route::get('/', function(){
	return redirect()->route('index',['locale'=>clang()]);
});
Route::prefix('{locale?}')->group(function(){
	/*****Admin/suscribe*****/
	Route::post('subscribe', "WebSite\HomeController@subscribe")->name('subscribe');
	/*****website/index*****/
	Route::get('/', "WebSite\HomeController@index")->name('index');
	/*****Admin/index*****/
	Route::get('admin', function ($locale = "en") 
	{
	    return view('admin/index');
	});
	/*****website/about*****/
	Route::get('/about',function($locale = "en")
	{
		return view('website.about', [
			'word'=>\App\TextWord::find(1),
			'sections'=>\App\AboutSections::get(),
			'active' => 'About',
		]);
	})->name('about');
	/*****website/sub-field/name*****/
	Route::get('/sub-field/{id}',function($locale = "en", $id, \App\SubFields $sub_fields)
	{
		return view('website.sub-field', [
			'sub_field'=>$sub_fields->find($id),
			'active' => 'Fields',
		]);
	})->name('sub-field');
	/*****website/contact*****/
	Route::prefix('/contact')->name('contact.')->group(function(){
		Route::get('/',function($locale = "en")
		{
			return view('website.contact',[
				'active' => 'Contact US',
			]);
		})->name('index');
		Route::post('/', "WebSite\HomeController@add")->name('add');
	});

	Route::prefix('/fields')->name('fields.')->group(function () 
	{
	    Route::get('/',function($locale = "en")
	    {
			return view('website.fields', [
				'fields'=>\App\Fields::get(),
				'active' => 'Fields',
			]);
		})->name('index');
		/*****website/field/name*****/
		Route::get('/{name}',function($locale = "en", $name, \App\Fields $fields)
		{
			return view('website.field', [
				'field'=>$fields->where("title_en", $name)->first(),
				'active' => 'Fields',
			]);
		})->name('view');
	});

	/*****website/products*****/
	Route::prefix('/products')->name('products.')->group(function(){
		/*****website/products*****/
		Route::get('/',function($locale = "en", \App\Products $products)
		{
			return view('website.products', [
				'products'=>$products->get(),
				'active' => 'Products',
			]);
		})->name('index');
		/*****website/products/name*****/
		Route::get('/{name}',function($locale = "en", $name, \App\Products $products)
		{
			return view('website.product', [
				'product'=>$products->where("title_en", $name)->first(),
				'active' => 'Products',
			]);
		})->name('view');
	});
	/*****website/partners*****/
	Route::prefix('/partners')->name('partners.')->group(function(){
		Route::get('/',function($locale = "en", \App\Partners $partners)
		{
			return view('website.partners', [
				'partners'=>$partners->get(),
				'active' => 'Partners',
			]);
		})->name('index');
		/*****website/partners/name*****/
		Route::get('/{name}',function($locale = "en", $name, \App\Partners $Partner)
		{
			return view('website.partner', [
				'partner'=>$Partner->where("title_en", $name)->first(),
				'active' => 'Partners',
			]);
		})->name('view');
	});

	/*****website/achievements*****/
	Route::prefix('/achievements')->name('achievements.')->group(function(){
		Route::get('/',function($locale = "en", \App\Achievements $achievements)
		{
			return view('website.achievements', [
				'achievements'=>$achievements->get(),
				'active' => 'Achievements',
			]);
		})->name('index');
		/*****website/partners/id*****/
		Route::get('/{id}',function($locale = "en", $id, \App\Achievements $achievements)
		{
			return view('website.achievement', [
				'achievement'=>$achievements->find($id),
				'active' => 'Achievements',
			]);
		})->name('view');
	});
	/*****website/news*****/
	Route::prefix('/news')->name('news.')->group(function(){
		Route::get('/',function($locale = "en", \App\News $news)
		{
			return view('website.news', [
				'active' => 'News',
				'news'=>$news->get(),
			]);
		})->name('index');
		/*****website/partners/id*****/
		Route::get('/{id}',function($locale = "en", $id, \App\News $news)
		{
			return view('website.new', [
				'new'=>$news->find($id),
				'active' => 'News',
			]);
		})->name('view');
	});
	/*****website/Downloads*****/
	Route::prefix('/downloads')->name('downloads.')->group(function(){
		Route::get('/', function($locale = "en", \App\Downloads $downloads){
			return view('website.downloads', [
				'active' => 'Downloads',
				'downloads'=>$downloads->get(),
			]);
		})->name('index');
		Route::get('/{id}', function($locale = "en", $id, \App\Downloads $downloads){
			return response()->download('slider/'.$downloads->find($id)->path);
		})->name('view');
	});
	Auth::routes();
	Route::get('logout', 'Auth\LoginController@logout');
});




// Route::get('/home', 'HomeController@index')->name('home');
