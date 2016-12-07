<?php
// until widgets are fully implemented
if(site()->user()->hasRole('admin')):

	return array(
	  'title' => 'Cache Flusher',
	  'html'  => function() {

	  	$html = brick('style', '#flusher-widget h2 { margin-bottom: 1.5em; };');
	  	$html.= brick('form', brick('button', 'Flush the cache', ['name'=>'cache-flusher', 'id'=>'cache-flusher', 'class'=>'btn btn-rounded btn-submit', 'type'=>'submit']), ['method'=>'POST', 'action'=>url('cache-clear')]);

	  	return $html;

	  }
	);
else:
	return false;
endif;