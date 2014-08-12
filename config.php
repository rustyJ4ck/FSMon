<?php
return array(

     // Default scan path is `script root`
	 // 'root'   => '/root/to/scan',
     
     // ServerTag for text reports, default _SERVER[SERVER_NAME]
	 // 'server' => 'server_name',
 
	 'files' => '(\.php.?|\.htaccess)$',
     
     'log' => true,

	 'mail' => array(
	 	'from'   => 'info@skillz.ru',
	 	'to'   	 => 'rustyj4ck@gmail.com',

	 	// disabled by default
	 	'enable' => false
	 )
);