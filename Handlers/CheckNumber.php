<?php

namespace Handlers;

/**
 * Class CheckNumber
 */
class CheckNumber extends Handler
{
    /**
     * @param $request
     *
     * @return mixed|string
     */
    public function HandleRequest($request)
    {
        if (is_numeric($request)) {
            return 'Parámetro de tipo numérico: ' . $request;
        }

        return $this->next->HandleRequest($request);
    }
}
