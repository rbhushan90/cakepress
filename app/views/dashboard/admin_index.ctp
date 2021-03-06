<?php
$this->title = __('Dashboard', true);
$this->icon = 'home';
echo $this->element('flour/content_start');

$items = array();
$items[] = array(
	'type' => 'element',
	'target' => 'a',
	'data' => array(
		'element' => 'flour/box',
		'element_data' => "caption:EINS\r\ncontent:content uno",
	)
);

$items[] = array(
	'type' => 'box',
	'target' => 'b',
	'data' => array(
		'class' => 'box',
		'caption' => 'ZWEI',
		'content' => 'content zwo',
		'footer' => 'HAHA',
		'filters' => array('huhu', 'haha'),
	)
);

$items[] = array(
	'type' => 'quickpress',
	'target' => 'b',
	'caption' => 'Schnellschreiben',
	'template' => 'admin',
);

$items[] = array(
	'type' => 'quickpress',
	'target' => 'b',
	// 'caption' => 'Schnellschreiben',
	// 'template' => 'admin',
);


echo $this->Widget->row($items, 'half', array('style' => 'padding: 10px;'));


echo $this->element('flour/box', array(
	'template' => 'half',
	'caption' => 'HAHAHAHAHHAHAHA',
	'content' => array('a' => 'HUHU A', 'b' => 'HAHA B'),
	'footer' => 'FOOT',
));

echo $this->element('flour/content_stop');