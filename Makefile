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
	php artisan mail:send

test:
	php artisan dusk

sail-up:
	./vendor/bin/sail up -d

sail-down:
	./vendor/bin/sail down

