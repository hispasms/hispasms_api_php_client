<?php

namespace hispasms\api\client;

use hispasms\api\model\nc\logs\GetNumberContextLogsExecuteContext;
use hispasms\api\AbstractApiClient;
use hispasms\api\model\nc\logs\NumberContextLogsResponse;

/**
 * This is a generated class and is not intended for modification!
 */
class GetNumberContextLogs extends AbstractApiClient {

    public function __construct($configuration) {
        parent::__construct($configuration);
    }

    /**
     * @param GetNumberContextLogsExecuteContext $params
     * @return NumberContextLogsResponse
     */
    public function execute(GetNumberContextLogsExecuteContext $params) {
        $restPath = $this->getRestUrl("/restapi/number/1/logs");
        $content = $this->executeGET($restPath, $params);
        return $this->map(json_decode($content), get_class(new NumberContextLogsResponse));
    }

}