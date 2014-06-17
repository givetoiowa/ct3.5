#Amazon Web Services Set Up
The setup we decided to go with for the aws sandbox is with the site in EC2 with the wp database in RDS. The benefit of this being that the site will handle an infulx in visitors better, run a little faster in general, and has a bunch of amazon services for backing up and maintaining the database.

The stack will be EC2, Linux, Apache2, RDS, MySQL, WordPress 
 
##EC2 set up
- Launch new instance 
- Choose your OS for your server. (really any linux distro will work) 
- Configure memory and details. 
	- Default values work for most 
	- Sandbox set up with a microinstance (this may need to be upgraded to medium). 
- Name instance
- On Step 6 it is important to open up the HTTP port 80 for all incoming sources. If you set up ftp (which I will get to later) you will need to also open up ports 20-21 
- When assigning a key pair it is important to keep a backup of the key pair. You will need this anytime you connect to the server 
- After the instance has been launched assign an Elastic IP 

###Once you've set up and connected to the instance:
- Install MySQL, Apache, and PHP (if you aren't familiar with package managers there are tons of tutorials to walk you through this)

##RDS set up
- This is pretty straight forward and a microinstance + default values were used for the sandbox 
- Note the server address and mysql user details 
- **Important** in RDS make sure to open port 3306 in the security group! 

##Setting up WordPress
- After you've connected to EC2 connect to RDS from EC2 with something like:
'''
sudo mysql -u givetoiowa -p -h uifsandbox.c1euslesivew.us-west-2.rds.amazonaws.com
''' 
- Next set up your wordpress database, wp user, and grant priveleges 
- In EC2 install wordpress (here is a [tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-on-centos-6--2)) 
- **Important** In wp-config make sure to change localhost to the RDS Endpoint! Use the same database and user info you just set up in RDS for the config 

##Configure WP MultiSite 
- [Here is a good tutorial](https://www.digitalocean.com/community/tutorials/how-to-set-up-multiple-wordpress-sites-using-multisite) for configurign multisite 
- Basically enable the wp network then update the config and .htaccess then restart the server and your good to go 

##FTP Set Up 
- Install vsftpd
- Make the needed changes to the conf file in _/etc/vsftpd/vsftpd.conf_ 
- **Important** Make sure TCP ports are open for FTP and passive FTP 

 

 
