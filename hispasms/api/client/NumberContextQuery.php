<?php

namespace hispasms\api\client;

use hispasms\api\model\nc\query\NumberContextRequest;
use hispasms\api\model\nc\query\NumberContextResponse;
use hispasms\api\AbstractApiClient;

/**
 * This is a generated class and is not intended for modification!
 */
class NumberContextQuery extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param NumberContextRequest $body
     * @return NumberContextResponse
     */
    public function execute(NumberContextRequest $body) {
        $restPath = $this->getRestUrl("/restapi/number/1/query");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new NumberContextResponse));
    }

}