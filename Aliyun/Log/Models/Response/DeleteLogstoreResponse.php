<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Response;

/**
 * The response of the DeleteLogstore API from log service.
 * Class DeleteLogstoreResponse
 * @package Aliyun\Log\Models\Response
 */
class DeleteLogstoreResponse extends Response {

    /**
     * DeleteLogstoreResponse constructor.
     *
     * @param $resp
     * @param $header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
    }
    
}
