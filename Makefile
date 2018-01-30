PRODUCTION=
COMPOSE_FILES=docker-compose.yml
RUN_PORT=7005
DHT_USER=a
DHT_GROUP=a

COMPOSE_FILES+=-f docker-compose.yml



help:
	@echo "up             : Create and start containers."
	@echo "status         : Shows the status of the current containers."
	@echo "shell          : Starting a zsh shell  in web container."
	@echo "shell-as-root  : Starting a bash shell as \"root\" user in web container."
	@echo "destroy        : Stop and remove containers, networks, images, and volumes."
	@echo "provision      : Run the provision."
	@echo "update         : Update all codes."
	@echo ""

up:
	docker-compose -f $(COMPOSE_FILES) up -d
build:
	docker-compose -f $(COMPOSE_FILES) up -d --build

update:
	docker-compose -f $(COMPOSE_FILES) exec -T --user=$(DHT_USER) web sh -c 'cd /var/lib/aduper/app && composer update --optimize-autoloader'

status:
	docker-compose -f $(COMPOSE_FILES) ps

destroy:
	docker-compose -f $(COMPOSE_FILES) down

shell:
	docker-compose -f $(COMPOSE_FILES) exec --user=$(DHT_USER) laravel bash

shell-as-root:
	docker-compose -f $(COMPOSE_FILES) exec laravel bash

provision:
	docker-compose -f $(COMPOSE_FILES) exec -T --user=$(DHT_USER) laravel /var/lib/a/app/bin/provision.sh
