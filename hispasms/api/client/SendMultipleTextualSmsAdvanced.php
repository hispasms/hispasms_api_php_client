<?php

namespace hispasms\api\client;

use hispasms\api\model\sms\mt\send\SMSResponse;
use hispasms\api\AbstractApiClient;
use hispasms\api\model\sms\mt\send\textual\SMSAdvancedTextualRequest;

/**
 * This is a generated class and is not intended for modification!
 */
class SendMultipleTextualSmsAdvanced extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param SMSAdvancedTextualRequest $body
     * @return SMSResponse
     */
    public function execute(SMSAdvancedTextualRequest $body) {
        $restPath = $this->getRestUrl("/restapi/sms/1/text/advanced");
        $content = $this->executePOST($restPath, null, $body);
        return $this->map(json_decode($content), get_class(new SMSResponse));
    }

}