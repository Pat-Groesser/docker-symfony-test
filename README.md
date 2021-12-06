# Easy Symfony

---

Easy Symfony is a lightweight easy to use docker-compose configuration that will build a ready to use Symfony environment.  
Clone the project, build you docker image, run it and start working on your Symfony app ! 

## Versions
There are two different versions of Easy Symfony one with sqlite and an other with a mysql server.

## Documentation

---

###Prerequisites

Before starting the project installation you need to ensure you have a version of [docker engine and docker-compose](https://docs.docker.com/compose/install/) installed on your computer.

### Installation

The recommended way to use Easy Symfony is to first fork this repository. To do so please refer to the [github article](https://docs.github.com/en/get-started/quickstart/fork-a-repo#forking-a-repository) that gets
you started with forks.  

After you got the repository locally on your computer you can start building the docker image.

    $ docker-compose build

_This step can in some cases take time._

Now you can run the image and like every docker projects you will use this command every time you work on this project.

    $ docker-compose up -d

_This first time it will take longer._

After the containers are running you are ready to start creating a Symfony project. To do so you need access to the prompt of the php container.

    $ docker exec -it php8-container bash

Now you can use composer to create your Symfony project.

    $ composer create-project symfony/skeleton .

This is an example you can use any [Symfony](https://symfony.com/doc/current/setup.html#creating-symfony-applications) project creation command.  
*Don't forget to put the "." that will put all the Symfony files inside our project directory on our php container. Nginx is looking for the public folder of this directory when resolving requests.*  

You are ready to go ! You can check that your app is running on your web browser at `localhost:8080`.

### Configuration

---

* [Sqlite db creation and configuration with Doctrine](app/documentation/sqlite-db-creation-and-configuration.md)
* [Mysql8 alternative](app/documentation/mysql8-alternative.md)
* [How to use Symfony Encore](app/documentation/how-to-use-symfony-encore.md)