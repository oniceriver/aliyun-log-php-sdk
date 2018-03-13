<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Response;

/**
 * The response of the GetCursor API from log service.
 * Class GetCursorResponse
 * @package Aliyun\Log\Models\Response
 */
class GetCursorResponse extends Response {
    /**
     * @var string cursor
     *
     */
    private $cursor;
    /**
     * GetCursorResponse constructor
     *
     * @param array $resp
     *            GetLogs HTTP response body
     * @param array $header
     *            GetLogs HTTP response header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
        $this->cursor = $resp['cursor'];
    }
    
    /**
     * Get cursor from the response
     *
     * @return string cursor
     */
    public function getCursor(){
      return $this->cursor;
    } 
}
