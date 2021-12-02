# Easy Symfony

---

Easy symfony is a lightweight easy to use docker-compose configuration that will build a ready to use symfony environment.  
Clone the project, build you docker image, run it and start working on your symfony app ! 

## Versions
There are two different versions of Easy symfony one with sqlite and an other with a mysql server.

## Documentation

---

### Installation

The recommended way to use Easy Symfony is to first fork this repository. To do so please refer to the [github article](https://docs.github.com/en/get-started/quickstart/fork-a-repo#forking-a-repository) that gets
you started with forks.  

After we got the repository locally on our computer we can start building the docker image.

    $ docker-compose build

_This step can in some cases take time._

Now we can run the image and like every docker projects we will use this command every time we work on this project.

    $ docker-compose up -d

_This first time it will take longer._

After our containers are running we are ready to start creating our symfony project. To do so we will enter in our php container.

    $ docker exec -it php8-container bash

Now we will use composer to create our symfony project.

    $ composer create-project symfony/skeleton .

_This is an example you can use any [symfony](https://symfony.com/doc/current/setup.html#creating-symfony-applications) project creation command._

You a ready to go ! 

### Configuration

---

* Sqlite db creation and configuration
* Mysql8 alternative
* How to use symfony encore