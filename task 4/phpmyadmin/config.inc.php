<?php
	$i = 0;

	$i++;

	$cfg['Servers'][$i]['auth_type'] = 'config';
	/* Server parameters */
	$cfg['Servers'][$i]['host'] = 'mytask.ru';
	$cfg['Servers'][$i]['connect_type'] = 'tcp';
	$cfg['Servers'][$i]['compress'] = false;
	$cfg['Servers'][$i]['extension'] = 'mysqli';
	$cfg['Servers'][$i]['AllowNoPassword'] = true;
	$cfg['Servers'][$i]['controluser'] = 'root';
	$cfg['Servers'][$i]['controlpass'] = 'root';
?>
