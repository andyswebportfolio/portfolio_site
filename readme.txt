Readme

The www file is where the site goes. It was a total guess but it works. I just renamed a folder from a tutorial called site and it works better now.
(That guess was written in the Docker Compose file.)

The tutorial for this came from: https://medium.com/@mikez_dg/how-to-set-up-a-simple-lamp-server-with-docker-images-in-2023-9b0e24476ec6

http://localhost:8080 is for phpMyAdmin

http://localhost is for the site itself


This is your blank canvas.
Just build something.


Start Docker Compose Containers with
docker-compose up -d

Docker must be running first else it complaints about daemeons or something mental.
Start the program using the GUI


Stop the containers with
docker stop $(docker ps -a -q)


Have a look at what is running:
Docker container ls

#######
//Keep Me Updated!

You can change the versions of the programs installed in the Dockerfile(s).
You should always check you are on the latest stable version(s) before you install this and run it.