<?php
namespace Grav\Plugin\Shortcodes;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class DecoShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('deco', function(ShortcodeInterface $sc) {
            $class = $sc->getParameter('class');
            $x = $sc->getParameter('x');
            $y = $sc->getParameter('y');
            return '<div class="deco ' . $class . '" style="top:' . $y . '%;" data-reveal><div><span style="left:' . $x . '%;">' . $sc->getContent() . '</span></div></div>';
        });
    }
}