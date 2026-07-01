<?php
require (getenv('PHLO_ENGINE') ?: '/phlo').'/phlo.php';
phlo_app (
	id:    'Phlo Poll',
	host:  'demo.poll.qdev.nl',
	build: true,
	debug: true,
	app:    dirname(__DIR__).'/',
	daemon: 3001,
);
