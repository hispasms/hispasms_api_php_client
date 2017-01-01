<?php

namespace hispasms\api\client;

use hispasms\api\model\sms\mt\send\SMSResponse;
use hispasms\api\AbstractApiClient;
use hispasms\api\model\sms\mt\send\textual\SMSTextualRequest;

/**
 * This is a generated class and is not intended for modification!
 */
class SendSingleTextualSms extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param SMSTextualRequest $body
     * @return SMSResponse
     */
    public function execute(SMSTextualRequest $body) {
        $restPath = $this->getRestUrl("/restapi/sms/1/text/single");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new SMSResponse));
    }

}