# Блог

однажды я его доделаю, выложу и начну

## Установка

1) git
2) `docker build -f docker/Dockerfile -t serginhold/blog-phalcon:latest .` 
3) `docker-compose up -d`
4) `docker exec -i -t blog-phalcon bash -c "cd /var/www; bash"`
5) `phalcon migration run`
