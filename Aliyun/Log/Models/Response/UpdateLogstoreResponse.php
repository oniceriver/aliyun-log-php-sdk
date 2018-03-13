<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Response;

/**
 * The response of the UpdateLogstore API from log service.
 * Class UpdateLogstoreResponse
 * @package Aliyun\Log\Models\Response
 */
class UpdateLogstoreResponse extends Response {

    /**
     * UpdateLogstoreResponse constructor.
     *
     * @param $resp
     * @param $header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
    }
    
}
