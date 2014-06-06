SETUP
-----

Make sure `.cache` file php-writable
```
touch .cache && chmod 770
```


Configure
---------

See config.php


Run with cron
-------------

```
0 	3 	* 	* 	* 	/usr/bin/php -f /home/user/fsmon.php > /dev/null 2>&1 
```
