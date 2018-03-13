<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Response;

/**
 * Class RetryShipperTasksResponse
 * @package Aliyun\Log\Models\Response
 */
class RetryShipperTasksResponse extends Response{
    /**
     * RetryShipperTasksResponse constructor
     *
     * @param array $resp
     *            GetLogs HTTP response body
     * @param array $header
     *            GetLogs HTTP response header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
    }
}