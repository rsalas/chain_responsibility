<?php

namespace Handlers;

/**
 * Class Handler
 */
abstract class Handler
{
    protected $next;

    /**
     * @param $next
     *
     * @return mixed
     */
    public function setNext($next)
    {
        $this->next = $next;
        return $this->next;
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    abstract public function HandleRequest($request);
}
