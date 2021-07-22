-include env_make

.PHONY: test

php ?= 7.2

default: run

run:
	docker-compose up -d mailhog
	php artisan serve

stop:
	docker-compose stop mailhog

send: 
	php artisan example:send-mail

test:
	./vendor/bin/phpunit tests/Feature/MailTest.php