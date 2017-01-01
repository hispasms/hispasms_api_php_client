<?php

namespace hispasms\api\client;

use hispasms\api\model\sms\mt\send\SMSResponse;
use hispasms\api\AbstractApiClient;
use hispasms\api\model\sms\mt\send\binary\SMSMultiBinaryRequest;

/**
 * This is a generated class and is not intended for modification!
 */
class SendMultipleBinarySms extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param SMSMultiBinaryRequest $body
     * @return SMSResponse
     */
    public function execute(SMSMultiBinaryRequest $body) {
        $restPath = $this->getRestUrl("/restapi/sms/1/binary/multi");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new SMSResponse));
    }

}