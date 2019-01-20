Requirements:

Lamp on ubuntu can be installed from: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
To send mail alerts, install phpmailer from https://linuxhint.com/how-to-send-email-from-php/
That’s all you need!

Implementation:

Php files must be placed in the root directory for apache to recognise and run them which is /var/www/html/ in most ubuntu devices. Since we are using php, we store all files in the same root directory.Access to database is needed.

Before loading website, make sure apache is running on your device through terminal command
$ sudo systemctl status apache2           

If not, restart apache2
$ sudo service apache2 restart

Now, go to a web browser and type localhost/mainpage.html and after loading select a meter.
