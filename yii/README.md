# API

##docker setup

install docker and docker-compose (mac & windows only docker)
[Install](https://www.docker.com/community-edition#/download)

execute the following commands one by one
```sh
docker-compose up -d
sh ./dockerSetup.sh
```

add to your hosts file

```
127.0.0.1   api1.localhost api2.localhost
```

access to the following URL's
[http://api1.localhost:8080/users](http://api1.localhost:8080/users)
[http://api2.localhost:8080/users](http://api2.localhost:8080/users)
