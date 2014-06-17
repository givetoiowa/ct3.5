#Amazon Web Services Set Up
The setup we decided to go with for the aws sandbox is the site in EC2 with the wp database in RDS. The benefit of this being that the site will handle an infulx in visitors better, run a little faster in general, and has a bunch of amazon services for backing up and maintaining the database.

The stack will be EC2, Linux, Nginx, RDS, MySQL, WordPress 
 
##EC2 set up
- Launch new instance 
- Choose your OS for your server. (really any linux distro will work) 
- Configure memory and details. Default values work for most and the sandbox set up with a microinstance (this may need to be upgraded to medium). 
- Name instance
- On Step 6 it is important to open up the HTTP port 80 for all incoming sources. If you set up ftp (which I will get to later) you will need to also open up ports 20-21 
- When assigning a key pair it is important to keep a backup of the key pair. You will need this anytime you connect to the server 
- After the instance has been launched assign an Elastic IP 

###Once you've set up and connected to the instance:
- Install MySQL, Nginx, and PHP (here is a [tutorial](http://codingsteps.com/install-php-fpm-nginx-mysql-on-ec2-with-amazon-linux-ami/) if you are not familary with package managers)
- Make sure the nginx configuration file is set up how you want it in /etc/nginx/conf.d/default.conf 
- You may need to change the permissions on /var/www/html (chmod 755 html). By preference the sandbox environment is set up to point to var/www/html instead of the nginx default

##RDS set up
- This is pretty straight forward and a microinstance + default values were used for the sandbox 
- Note the server address and mysql user details 

##Connecting EC2 and RDS 
 
