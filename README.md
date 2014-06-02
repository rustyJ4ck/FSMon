SETUP
-----

touch .cache && chmod 770 .cache && chown user:www .cache


Configure
---------

See config.php


Run with cron
-------------

/usr/bin/php -f /home/user/fsmon.php > /dev/null 2>&1 
