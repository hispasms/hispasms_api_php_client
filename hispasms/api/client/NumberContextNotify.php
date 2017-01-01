<?php

namespace hispasms\api\client;

use hispasms\api\model\nc\notify\NumberContextResponse;
use hispasms\api\AbstractApiClient;
use hispasms\api\model\nc\notify\NumberContextRequest;

/**
 * This is a generated class and is not intended for modification!
 */
class NumberContextNotify extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param NumberContextRequest $body
     * @return NumberContextResponse
     */
    public function execute(NumberContextRequest $body) {
        $restPath = $this->getRestUrl("/restapi/number/1/notify");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new NumberContextResponse));
    }

}