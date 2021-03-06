<?php

namespace hispasms\api\client;

use hispasms\api\AbstractApiClient;
use hispasms\api\model\conversion\EndTagResponse;

/**
 * This is a generated class and is not intended for modification!
 */
class LogEndTag extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @return EndTagResponse
     */
    public function execute($messageId) {
        $restPath = $this->getRestUrl("/restapi/ct/1/log/end/{$messageId}");
        $content = $this->executePOST($restPath, null, null);
        return $this->map(json_decode($content), get_class(new EndTagResponse));
    }

}