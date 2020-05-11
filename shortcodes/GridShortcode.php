<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class GridShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('enum', function(ShortcodeInterface $sc) {
        	$class = $sc->getParameter('class');
            return '<div class="enum '. $class .'" data-reveal>'.$sc->getContent().'</div>';
        });

        $this->shortcode->getHandlers()->add('item', function(ShortcodeInterface $sc) {
        	$class = $sc->getParameter('class');
            return '<div class="item '. $class .'" data-reveal>'.$sc->getContent().'</div>';
        });
    }
}
