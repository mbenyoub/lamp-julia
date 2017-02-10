# lamp-julia
 Docker Compose for running Julia, PHP and Mysql.


#How to use

```bash
git clone https://github.com/carlosqueiroz/docker-lamp.git
cd docker-lamp/
docker-compose up -d
```

#Entering the container
```bash
docker-compose exec php bash
julia
exit
```