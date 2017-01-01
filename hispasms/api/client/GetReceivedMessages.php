<?php

namespace hispasms\api\client;

use hispasms\api\model\sms\mo\reports\GetReceivedMessagesExecuteContext;
use hispasms\api\model\sms\mo\reports\MOReportResponse;
use hispasms\api\AbstractApiClient;

/**
 * This is a generated class and is not intended for modification!
 */
class GetReceivedMessages extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param GetReceivedMessagesExecuteContext $params
     * @return MOReportResponse
     */
    public function execute(GetReceivedMessagesExecuteContext $params) {
        $restPath = $this->getRestUrl("/restapi/sms/1/inbox/reports");
        $content = $this->executeGET($restPath, $params);
        return $this->map(json_decode($content), get_class(new MOReportResponse));
    }

}