docker-up:
	docker-compose up -d

web-composer:
	docker-compose exec php-cli composer install

web-migrate:
	docker-compose exec php-cli php artisan migrate

web-migrate-rollback:
	docker-compose exec php-cli php artisan migrate:rollback

queue-listen:
	docker-compose exec php-cli php artisan queue:listen

npm-install:
	docker-compose exec nodejs npm install

npm-watch:
	docker-compose exec nodejs npm run watch-poll

npm-prod:
	docker-compose exec nodejs npm run production

perm:
	sudo chmod 777 -R bootstrap/cache && sudo chmod 777 -R storage

api-doc:
	php artisan api:doc

dump-autoload:
	docker-compose exec php-cli composer dump-autoload

websocket-start:
	docker-compose exec websocket-nodejs node server.js

websocket-install:
	docker-compose exec websocket-nodejs npm install

queue:
	docker-compose exec php-cli php artisan queue:work --tries=1

finished-shifts:
	docker-compose exec php-cli php artisan shifts:finished

unit:
	docker-compose exec php-cli vendor/bin/phpunit --coverage-html /var/www/public/tests

restart-queues:
	php artisan cache:clear && php artisan config:clear && php artisan queue:restart && sudo supervisorctl restart laravel-queue-worker:* && /etc/init.d/redis-server restart && sudo supervisorctl restart laravel-queue-worker:*
