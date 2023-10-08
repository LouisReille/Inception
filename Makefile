include ./srcs/.env
export

NAME	= inception
SRCS	= ./srcs/docker-compose.yml
FLAGS	= -d --build

all:	help $(NAME)

$(NAME):
	sudo mkdir -p ${DATA_FOLDER}/${WP_FOLDER}
	sudo mkdir -p ${DATA_FOLDER}/${DB_FOLDER}
	sudo mkdir -p ${DATA_FOLDER}/${LG_FOLDER}
	sudo chmod 777 /etc/hosts
	sudo echo "127.0.0.1 lreille.42.fr" >> /etc/hosts
	sudo echo "127.0.0.1 www.lreille.42.fr" >> /etc/hosts
	docker-compose -f $(SRCS) build
	docker-compose -f $(SRCS) up -d

fclean: clean rvolumes

clean:
	docker-compose -f $(SRCS) down
	docker system prune -a --force

re:	fclean all

stop:
	docker-compose -f $(SRCS) stop

down:
	docker-compose -f $(SRCS) down

up:
	docker-compose -f $(SRCS) up -d

ps:
	docker ps

rvolumes:
	sudo rm -rf $(DATA_FOLDER)

info:
	docker ps -a; \
	docker image ; \
	docker volume ls

.PHONY: help rvolumes ps up down stop re clean fclean info all
