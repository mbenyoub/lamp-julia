# lamp-julia
 Docker Compose for running Julia, PHP and Mysql.


#How to use

```bash
git clone https://github.com/mbenyoub/lamp-julia.git
cd lamp-julia/
docker-compose up -d
```

#Entering the container
```bash
docker-compose exec php bash
julia
exit
```

#Remove  all Conteiners and Images
```bash
docker rm --force $(docker ps -a -q)  
docker rmi --force $(docker images -q)
 ```
