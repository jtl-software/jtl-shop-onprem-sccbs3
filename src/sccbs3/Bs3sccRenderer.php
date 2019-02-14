<?php
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace sccbs3;

use scc\Renderer;
use JTL\Smarty\JTLSmarty;

/**
 * Class Bs3sccRenderer
 * @package sccbs3
 */
class Bs3sccRenderer extends Renderer
{
    /**
     * BS3sccRenderer constructor.
     * @param JTLSmarty $smarty
     */
    public function __construct(JTLSmarty $smarty)
    {
        $this->smarty = $smarty;
        $this->smarty->addTemplateDir(__DIR__ . '/templates/', __NAMESPACE__);
        parent::__construct($smarty);
    }
}
