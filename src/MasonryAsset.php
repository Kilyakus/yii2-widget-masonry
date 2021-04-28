<?php
namespace kilyakus\widget\masonry;

class MassonryAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');

        // $this->setupAssets('css', ['css/widget-modal.min'],'widget-css-modal');

        $this->setupAssets('js', [
			'js/gamma',
			'js/jquery.history',
			'js/jquery.masonry.min',
			'js/jquerypp.custom',
			'js/js-url.min',
			'js/modernizr.custom.70736'
		],'widget-js-masonry');

        parent::init();
    }
}
