<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Response;

/**
 * The response of the PutLogs API from log service.
 * Class PutLogsResponse
 * @package Aliyun\Log\Models\Response
 */
class PutLogsResponse extends Response {
    /**
     * PutLogsResponse constructor.
     *
     * @param $headers
     */
    public function __construct($headers) {
        parent::__construct ( $headers );
    }
}
