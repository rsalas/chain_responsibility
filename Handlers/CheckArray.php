<?php

namespace Handlers;

/**
 * Class CheckArray
 *
 * @package Handlers
 */
class CheckArray extends Handler
{
    /**
     * @param $request
     *
     * @return mixed|string
     */
    public function HandleRequest($request)
    {
        if (is_array($request)) {
            return "Parámetro de tipo array: " . implode(",", $request);
        }

        return $this->next->HandleRequest($request);
    }
}
