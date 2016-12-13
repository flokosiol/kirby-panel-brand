<?php
if(c::get('plugin.panel.brand.enable', true) === true ) {
if( site()->user() ) {
	kirby()->set('option', 'panel.stylesheet', u() . '/panel-brand.css');

	kirby()->routes(array(
		array(
			'pattern' => 'panel-brand.css',
			'action' => function() {
				header("Content-type: text/css; charset: UTF-8");
				$css_path = kirby()->roots()->plugins() . DS . 'kirby-panel-brand' . DS . 'assets' . DS . 'css' . DS . 'panel-brand.css';
				$css = file_get_contents($css_path);
				$css = str_replace(
					array(
						'[text]',
						'[background]',
						'[color]'
					),
					array(
						c::get('plugin.panel.brand.text', 'Panel Brand'),
						c::get('plugin.panel.brand.background', '#ae287f'),
						c::get('plugin.panel.brand.color', '#fff')
					),
					$css
				);
				echo $css;
			}
		)
	));
};
}
