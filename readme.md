	Инструкция как установить данный проект
	<hr>
	версия php >= 7.1 (менять в настройках-> модули -> php 7.1)
	находитесь в папке domains
	git clone https://github.com/ChDickens/laravel-crud.git в папку (domains)
	
	ИЛИ download .zip в папку (domains)
	в console переходите в папку с проектом
	cd domains/laravel-crud

	выполняете следующие команды:
	в корне
	.env.example переименовать в .env
	Прописываете свою БД, пользователя(root), пароль ''

	в консоле прописываем:
	composer update

	php artisan key:generate

	php artisan migrate

	php artisan db:seed

	php artisan serve

	Наслаждаетесь http://127.0.0.1:8000/admin/products
	либо тот урл, что у вас появится.