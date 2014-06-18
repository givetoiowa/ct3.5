#Amazon Web Services Set Up
The setup we decided to go with for the aws sandbox is with the site in EC2 and the wp database in RDS. The benefit of this being that the site will handle an infulx in visitors better, run a little faster, and has a bunch of amazon services for backing up and maintaining the database.

The stack will be Linux, Apache2, PHP, MySQL, and WordPress 
 
##EC2 set up
- Launch new instance 
- Choose your OS for your server. (really any linux distro will work) 
- Configure memory and details. 
	- Default values work for most 
	- Sandbox set up with a microinstance (this may need to be upgraded to medium). 
- Name instance
- **Important**: On step 6 remember to open up the HTTP port (80) for all incoming sources. If you set up ftp (which we will get to later) you will need to also open up ports 20-21 
- When assigning a key pair it is important to keep a backup of the key pair. You will need this when connecting to the server
- After the instance has been launched assign an Elastic IP 

###Once you've set up EC2:
- Connect to it using ssh (note your key pair and ip may be different):
```
$ sudo ssh -i EC2SandboxUIF.pem ec2-user@54.213.144.58
```
- Install MySQL, Apache, and PHP (if you aren't familiar with package managers here is a [tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu))

##RDS set up
- This is pretty straight forward and a microinstance + default values were used for the sandbox 
- Note the server address and mysql user details 
- **Important**: in RDS make sure to open port 3306 in the security group! For a microinstance this is done by looking at which security group the RDS instance is using and then opening up the port in the matching EC2 security group. 

###Once you've set up RDS:
- After you've connected to EC2 and set up RDS connect to RDS from EC2 with something like:
```
$ sudo mysql -u givetoiowa -p -h uifsandbox.c1euslesivew.us-west-2.rds.amazonaws.com
``` 
- Since MySQL is already installed on the server you should not have to do any additional set up

##Setting up WordPress
- The WP site will sit on EC2 and reference a database on RDS
- First set up your wordpress database, wp user, and grant priveleges in MySQL on your RDS server 
- Next install wordpress on your EC2 server (here is a [tutorial](https://www.digitalocean.com/community/tutorials/how-to-install-wordpress-on-centos-6--2) you can skip the steps for setting up the WP database since that should have already been done on the RDS instance) 
- **Important**: In wp-config make sure to change localhost to the RDS Endpoint! This is how you connect EC2 and RDS (use the same database and user info you just set up in RDS for the config) 

###Configure WP MultiSite 
- [Here is a tutorial](https://www.digitalocean.com/community/tutorials/how-to-set-up-multiple-wordpress-sites-using-multisite) for multisite config
- Basically enable the wp network then update the config and .htaccess 
- Restart the server and your good to go 

##FTP Set Up 
- You can connect using sftp similarly to ssh like:
```
$ sudo sftp -i EC2SandboxUIF.pem ec2-user@54.213.144.58
```
- If you want to set up differt ftp users and use filezilla:
	- Install vsftpd ([tutorial](http://blog.liwen.name/configure-vsftpd-on-amazon-ec2/148))
	- Make the needed changes to the conf file in /etc/vsftpd/vsftpd.conf
	- **Important** Make sure TCP ports are open for FTP and passive FTP 
	- Connect with an ftp client  
 

 
