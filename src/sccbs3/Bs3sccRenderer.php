<?php

declare(strict_types=1);

namespace sccbs3;

use scc\Renderer;

/**
 * Class Bs3sccRenderer
 * @package sccbs3
 */
class Bs3sccRenderer extends Renderer
{
    /**
     * BS3sccRenderer constructor.
     * @param JTL\Smarty\JTLSmarty|\Smarty|\Smarty\Smarty $smarty $smarty
     */
    public function __construct($smarty)
    {
        $this->smarty = $smarty;
        $this->smarty->addTemplateDir(__DIR__ . '/templates/scc/', __NAMESPACE__);
        parent::__construct($smarty);
    }
}
