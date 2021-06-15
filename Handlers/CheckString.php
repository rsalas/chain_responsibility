<?php

namespace Handlers;

/**
 * Class CheckString
 */
class CheckString extends Handler
{
    /**
     * @param $request
     *
     * @return mixed|string
     */
    public function HandleRequest($request)
    {
        if (is_string($request)) {
            return "Parámetro de tipo cadena: " . $request;
        }

        return $this->next->HandleRequest($request);
    }
}
