<?php


Auth::routes();

// Запрещаем доступ не зарегестрированных пользователей ['middleware'=>'auth']
Route::group(['middleware'=>'auth'], function (){
    Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
    Route::resource('/admin/products', 'ProductController');
    // разрешаем методы для публичной части
    Route::resource('/admin/posts', 'PostController')->except(['index', 'show']);
});

// Роут с динамическим параметром
Route::get('/posts/{slug}', 'PostController@show')->name('post.show');
// Роут с выводом всех постов
Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/feedback', 'MailController@feedback')->name('feedback');
Route::post('/sendmail', 'MailController@sendmail')->name('sendmail');

/*
 * 1. регистрация в сервисе mailtrap.io
 * https://mailtrap.io/
 * 2. Интеграция сервиса и вашего приложения(laravel файл config/mail.php)
 * php artisan config:cache
 * 3. Создали контроллер для наших дейтвий
 * 4. Создали роут с формой фибдбек и создали вид с формой
 * 5. Создали роут где будем обрабатывать наши данные из формы
 * 6. Создали класс mail при помощи artisan
 * https://laravel.com/docs/5.7/mail#sending-mail
 * 7. Создали вид нашего письма
 *
 * */

