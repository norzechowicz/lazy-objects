<?php

namespace Isolate\LazyObjects\Proxy;

use Isolate\LazyObjects\Proxy\Method\Replacement;

class MethodReplacement
{
    /**
     * @var Method
     */
    private $method;

    /**
     * @var Replacement
     */
    private $replacement;

    /**
     * @param Method $method
     */
    public function __construct(Method $method, Replacement $replacement)
    {
        $this->method = $method;
        $this->replacement = $replacement;
    }

    /**
     * @return Replacement
     */
    public function getReplacement()
    {
        return $this->replacement;
    }

    /**
     * @return Method
     */
    public function getMethod()
    {
        return $this->method;
    }
}
