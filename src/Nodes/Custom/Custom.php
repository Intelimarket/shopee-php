<?php

namespace Shopee\Nodes\Custom;

use Shopee\Nodes\NodeAbstract;
use Shopee\Nodes\NodeAbstractV2;
use Shopee\RequestParametersInterface;
use Shopee\ResponseData;

class Custom extends NodeAbstractV2
{
    /**
     * Use this call for get custom API v1
     * Formatted like it : '/api/v1/shop/get'
     *
     * @param $url
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function request($url, $parameters = []): ResponseData
    {
        return $this->post($url, $parameters);
    }
}
