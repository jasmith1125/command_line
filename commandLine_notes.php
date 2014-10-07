/* HOW TO RESTART APACHE2 */

ONE WAY:
apachectl -k start

 
ANOTHER WAY:
Or using the OS init scripts (how it knows to start when the system boots) you could do:

/etc/init.d/apache2 restart


Here's an example of what you may see:

 

root@Harvard:~# /etc/init.d/apache2 restart
 * Restarting web server apache2                 [ OK ]
root@Harvard:~#



/* HOW TO CHECK WHETHER APACHE2 LOCAL SERVER IS RUNNING */

service apache2 status


You should get a response like:

* apache2 is running

