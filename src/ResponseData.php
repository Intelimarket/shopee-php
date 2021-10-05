<?php

namespace Shopee;

use App\Util\StringHelper;
use Psr\Http\Message\ResponseInterface;

use function json_decode;

class ResponseData
{
    /** @var ResponseInterface */
    private $response;

    /** @var array */
    private $data;

    public function __construct(ResponseInterface $response)
    {
        $data = $response->getBody()->getContents();

        if (ctype_print($data)){
            $data = json_decode($data, true);
        }

        $this->response = $response;
        $this->data = $data;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getData()
    {
        return $this->data;
    }
}
