<?php

namespace Solarium\QueryType\Server\CoreAdmin\Query\Action;

use Solarium\QueryType\Server\Query\Action\AbstractAction;

abstract class AbstractCoreAction extends AbstractAction
{
    /**
     * Set the core name that should be reloaded.
     *
     * @param string $core
     */
    public function setCore(string $core)
    {
        $this->setOption('core', $core);
    }

    /**
     * Get the related core name.
     *
     * @return string
     */
    public function getCore(): string
    {
        return (string) $this->getOption('core');
    }

    public function getResultClass(): string
    {
        // TODO: Implement getResultClass() method.
        return '';
    }
}
