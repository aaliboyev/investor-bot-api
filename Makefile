

install:
	docker-compose up --build -d

cmd:
	docker exec -it app bash

db-cmd:
	docker exec -it db bash

down: stop-db stop-app stop-adminer stop-redis

up:
	docker-compose up -d

start-db:
	docker-compose up -d db

start-app:
	docker-compose up -d app

start-adminer:
	docker-compose up -d adminer

start-redis:
	docker-compose up -d redis

stop-db:
	docker-compose stop db

stop-app:
	docker-compose stop app

stop-adminer:
	docker-compose stop adminer

stop-redis:
	docker-compose stop redis

make stop:
	docker-compose stop
