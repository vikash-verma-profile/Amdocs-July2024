FROM ubuntu:18.04
RUN apt-get -y update 
RUN apt-get -y install nginx
WORKDIR /var/www/html/
RUN echo "Hi I am Vikash Verma" >index.html
EXPOSE 80/tcp

CMD [ "nginx","-g","daemon off;"]