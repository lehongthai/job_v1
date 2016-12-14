<?php

	Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
	]);
	/*get list post*/
	Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

		/*Quản lý tỉnh, thành phố*/
		Route::group(['prefix' => 'provin'], function () {
			Route::get('list', ['as' => 'admin.provin.list', 'uses' => 'Admin\ProvinController@getList']);
			Route::get('add', ['as' => 'admin.provin.getAdd', 'uses' => 'Admin\ProvinController@getAdd']);
			Route::post('add', ['as' => 'admin.provin.postAdd', 'uses' => 'Admin\ProvinController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.provin.getDelete', 'uses' => 'Admin\ProvinController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.provin.getEdit', 'uses' => 'Admin\ProvinController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.provin.postEdit', 'uses' => 'Admin\ProvinController@postEdit']);
			Route::post('action', ['as' => 'admin.provin.action', 'uses' => 'Admin\ProvinController@action']);
		});

		/*Quản lý câu hỏi thường gặp*/
		Route::group(['prefix' => 'a&q'], function () {
			Route::get('list', ['as' => 'admin.aq.list', 'uses' => 'Admin\AqController@getList']);
			Route::get('add', ['as' => 'admin.aq.getAdd', 'uses' => 'Admin\AqController@getAdd']);
			Route::post('add', ['as' => 'admin.aq.postAdd', 'uses' => 'Admin\AqController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.aq.getDelete', 'uses' => 'Admin\AqController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.aq.getEdit', 'uses' => 'Admin\AqController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.aq.postEdit', 'uses' => 'Admin\AqController@postEdit']);
			Route::post('action', ['as' => 'admin.aq.action', 'uses' => 'Admin\AqController@action']);
		});

		/*Quản lý phần nhập thông tin hồ sơ cho người dùng*/
		Route::group(['prefix' => 'info'], function () {
			Route::get('list/level', ['as' => 'admin.infouser.listlevel', 'uses' => 'Admin\InfoUserController@getListLevel']);
			Route::get('list/empirical', ['as' => 'admin.infouser.listempirical', 'uses' => 'Admin\InfoUserController@getListEmpirical']);
			Route::get('list/diploma', ['as' => 'admin.infouser.listdiploma', 'uses' => 'Admin\InfoUserController@getListDiploma']);
			Route::get('list/diploma_wish', ['as' => 'admin.infouser.listdiploma_wish', 'uses' => 'Admin\InfoUserController@getListDiploma_wish']);
			Route::get('list/exigency', ['as' => 'admin.infouser.listexigency', 'uses' => 'Admin\InfoUserController@getListExigency']);
			Route::get('list/type', ['as' => 'admin.infouser.listtype', 'uses' => 'Admin\InfoUserController@getListType']);
			Route::get('add/{alias?}', ['as' => 'admin.infouser.getAdd', 'uses' => 'Admin\InfoUserController@getAdd']);
			Route::post('add', ['as' => 'admin.infouser.postAdd', 'uses' => 'Admin\InfoUserController@postAdd']);
			Route::get('delete/{alias?}/{id?}', ['as' => 'admin.infouser.getDelete', 'uses' => 'Admin\InfoUserController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.infouser.getEdit', 'uses' => 'Admin\InfoUserController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.infouser.postEdit', 'uses' => 'Admin\InfoUserController@postEdit']);
			Route::post('action', ['as' => 'admin.infouser.action', 'uses' => 'Admin\InfoUserController@action']);
		});
		
		/*Quản lý các công việc*/
		Route::group(['prefix' => 'job'], function () {
			Route::get('list', ['as' => 'admin.job.list', 'uses' => 'Admin\JobController@getList']);
			Route::get('add', ['as' => 'admin.job.getAdd', 'uses' => 'Admin\JobController@getAdd']);
			Route::post('add', ['as' => 'admin.job.postAdd', 'uses' => 'Admin\JobController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.job.getDelete', 'uses' => 'Admin\JobController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.job.getEdit', 'uses' => 'Admin\JobController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.job.postEdit', 'uses' => 'Admin\JobController@postEdit']);
		});

		/*Quản lý Admin đăng công việc*/
		Route::group(['prefix' => 'post/job'], function () {
			Route::get('list', ['as' => 'admin.postjob.list', 'uses' => 'Admin\PostJobController@getList']);
			Route::get('add', ['as' => 'admin.postjob.getAdd', 'uses' => 'Admin\PostJobController@getAdd']);
			Route::post('add', ['as' => 'admin.postjob.postAdd', 'uses' => 'Admin\PostJobController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.postjob.getDelete', 'uses' => 'Admin\PostJobController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.postjob.getEdit', 'uses' => 'Admin\PostJobController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.postjob.postEdit', 'uses' => 'Admin\PostJobController@postEdit']);
		});

		



		Route::group(['prefix' => 'post'], function () {
			Route::get('list', ['as' => 'admin.post.list', 'uses' => 'Admin\PostController@getList']);
			Route::get('add', ['as' => 'admin.post.getAdd', 'uses' => 'Admin\PostController@getAdd']);
			Route::post('add', ['as' => 'admin.post.postAdd', 'uses' => 'Admin\PostController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.post.getDelete', 'uses' => 'Admin\PostController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.post.getEdit', 'uses' => 'Admin\PostController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.post.postEdit', 'uses' => 'Admin\PostController@postEdit']);
		});


		Route::group(['prefix' => 'about'], function () {
			Route::get('list', ['as' => 'admin.about.getList', 'uses' => 'Admin\AboutController@getList']);
			Route::get('add', ['as' => 'admin.about.getAdd', 'uses' => 'Admin\AboutController@getAdd']);
			Route::post('add', ['as' => 'admin.about.postAdd', 'uses' => 'Admin\AboutController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.about.getDelete', 'uses' => 'Admin\AboutController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.about.getEdit', 'uses' => 'Admin\AboutController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.about.postEdit', 'uses' => 'Admin\AboutController@postEdit']);
			Route::get('listshop', ['as' => 'admin.about.getListShop', 'uses' => 'Admin\AboutController@getListShop']);
			Route::get('editshop/{id?}', ['as' => 'admin.about.getEditShop', 'uses' => 'Admin\AboutController@getEditShop']);
			Route::post('editshop/{id?}', ['as' => 'admin.about.postEditShop', 'uses' => 'Admin\AboutController@postEditShop']);
		});

		Route::group(['prefix' => 'catepost'], function () {
			Route::get('list', ['as' => 'admin.catepost.list', 'uses' => 'Admin\CatePostController@getList']);
			Route::get('add', ['as' => 'admin.catepost.getAdd', 'uses' => 'Admin\CatePostController@getAdd']);
			Route::post('add', ['as' => 'admin.catepost.postAdd', 'uses' => 'Admin\CatePostController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.catepost.getDelete', 'uses' => 'Admin\CatePostController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.catepost.getEdit', 'uses' => 'Admin\CatePostController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.catepost.postEdit', 'uses' => 'Admin\CatePostController@postEdit']);
		});

		/*banner, icon, logo*/
		Route::group(['prefix' => 'image'], function () {
			Route::get('list', ['as' => 'admin.image.list', 'uses' => 'Admin\ImageController@getList']);
			Route::get('add', ['as' => 'admin.image.getAdd', 'uses' => 'Admin\ImageController@getAdd']);
			Route::post('add', ['as' => 'admin.image.postAdd', 'uses' => 'ImageController@postAdd']);
			Route::get('delete/{id?}', ['as' => 'admin.image.getDelete', 'uses' => 'Admin\ImageController@getDelete']);
			Route::get('edit/{id?}', ['as' => 'admin.image.getEdit', 'uses' => 'Admin\ImageController@getEdit']);
			Route::post('edit/{id?}', ['as' => 'admin.image.postEdit', 'uses' => 'Admin\ImageController@postEdit']);
		});
		Route::get('change/pass', 'Admin\UserController@getChange');
		Route::post('change/pass', 'Admin\UserController@postChange');
});
Route::post('auth/login', ['as' => 'admin.postLogin', 'uses' => 'Auth\AuthController@postLogin']);


Route::auth();

Route::get('/', 'WelcomeController@index');
Route::get('/about', 'WelcomeController@about');
Route::get('/contact', 'WelcomeController@contact');
Route::post('/contact', 'WelcomeController@postContact');
Route::get('/project', 'WelcomeController@project');
Route::get('detail/{alias?}', 'WelcomeController@detail');
Route::any( '{all?}' , 'WelcomeController@erors') -> where( 'all' , '()' );

/*Đăng ký thành viên*/
Route::get('facebook/redirect', 'Admin\SocialController@redirectFacebookToProvider');
Route::get('facebook/callback', 'Admin\SocialController@handleFacebookProviderCallback');

Route::get('google/redirect', 'Admin\SocialController@redirectGoogleToProvider');
Route::get('google/callback', 'Admin\SocialController@handleGoogleProviderCallback');

Route::post('user/register', 'Admin\SocialController@postRegister');
Route::get('user/register', 'Admin\SocialController@getRegister');
Route::get('user/active/{id?}',['as' => 'getConfirmUser', 'uses' => 'Admin\SocialController@getConfirmUser']);


/*Quản lý Thông Tin user*/
Route::group(['prefix' => 'ung-vien'], function () {
	Route::get('resume', 'UserController@getResume');
	Route::post('resume', 'UserController@postResume');
	Route::get('register', 'Admin\SocialController@getRegister');
	Route::post('register', 'Admin\SocialController@postRegister');
	Route::get('ho-so/ho-so-chi-tiet/{id?}', 'UserController@getDetailResume');
	Route::post('ho-so/ho-so-chi-tiet/{id?}', 'UserController@postDetailResume');
	Route::get('ho-so-ca-nhan', 'UserController@getViewDetailResume');
	Route::get('edit/{id?}', ['as' => 'admin.provin.getEdit', 'uses' => 'Admin\ProvinController@getEdit']);
	Route::post('edit/{id?}', ['as' => 'admin.provin.postEdit', 'uses' => 'Admin\ProvinController@postEdit']);
	Route::post('action', ['as' => 'admin.provin.action', 'uses' => 'Admin\ProvinController@action']);
});



/*Quản lý employer*/
Route::group(['prefix' => 'nha-tuyen-dung'], function () {
	Route::get('dang-tin', 'EmployerController@getPostJob');
	Route::post('resume', 'UserController@postResume');
	Route::get('register', 'Admin\SocialController@getRegister');
	Route::post('register', 'Admin\SocialController@postRegister');
	Route::get('ho-so/ho-so-chi-tiet/{id?}', 'UserController@getDetailResume');
	Route::get('edit/{id?}', ['as' => 'admin.provin.getEdit', 'uses' => 'Admin\ProvinController@getEdit']);
	Route::post('edit/{id?}', ['as' => 'admin.provin.postEdit', 'uses' => 'Admin\ProvinController@postEdit']);
	Route::post('action', ['as' => 'admin.provin.action', 'uses' => 'Admin\ProvinController@action']);
});