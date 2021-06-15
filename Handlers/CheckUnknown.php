<?php

namespace Handlers;

/**
 * Class CheckUnknown
 */
class CheckUnknown extends Handler
{
    /**
     * @param $request
     *
     * @return string
     */
    public function HandleRequest($request)
    {
        return "Parámetro de tipo no procesable: " . gettype($request);
    }
}
