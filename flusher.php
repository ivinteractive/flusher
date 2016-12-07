<?php

if(site()->user() && site()->user()->hasRole('admin')):

	$kirby = kirby();

	$kirby->set('widget', 'flusher', __DIR__ . '/widgets/flusher');

	$kirby->routes([
		[
			'pattern' => 'cache-clear',
			'method' => 'POST',
			'action'  => function() {
				cache::flush();
				return header::redirect(url('/panel/'));
			}
		]
	]);
	
endif;