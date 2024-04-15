Readme

The site is in the html file.
It would normally look (and is written in the Docker Compose file as [some path, then - ./html:/var/www/html

However the only part that needs to exist is the html part itself for this dev environment. Cool!

The tutorial for this came from: https://medium.com/@mikez_dg/how-to-set-up-a-simple-lamp-server-with-docker-images-in-2023-9b0e24476ec6


This is your blank canvas.
Just build something.



//Start Docker

Docker must be running first else it complaints about daemeons or something mental.
Start the program using the GUI


//Run Docker Compose in Terminal


Start Docker Compose Containers with
docker-compose up -d (use -d to detach and allow you to continue to use the terminal)

#########

Connection Details when Running

http://localhost:8080 is for phpMyAdmin
User = root
Password = root_password (possible the same as SQL database(?)

http://localhost is for the site itself

#########

//Stop it when you're done


Stop the containers with
docker stop $(docker ps -a -q)


Have a look at what is running:
Docker container ls

(Then close the Docker Program)



//Keep Me Updated!

You can change the versions of the programs installed in the Dockerfile(s).
You should always check you are on the latest stable version(s) before you install this and run it.