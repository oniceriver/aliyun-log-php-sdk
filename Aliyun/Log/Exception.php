<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log;

/**
 * The Exception of the log serivce request & response.
 *
 * @author log service dev
 */
class Exception extends \Exception{
    /**
     * @var string
     */
    private $requestId;
    
    /**
     * Aliyun\Log\Exception constructor
     *
     * @param string $code
     *            log service error code.
     * @param string $message
     *            detailed information for the exception.
     * @param string $requestId
     *            the request id of the response, '' is set if client error.
     */
    public function __construct($code, $message='', $requestId='') {

        if (empty($message) && !is_numeric($code)){
            $message = $code;
            $code = 1;
        }
        parent::__construct($message);
        $this->code = $code;
        $this->message = $message;
        $this->requestId = $requestId;
    }
    
    /**
     * The __toString() method allows a class to decide how it will react when
     * it is treated like a string.
     *
     * @return string
     */
    public function __toString() {
        return "Aliyun\Log\Exception: \n{\n    ErrorCode: $this->code,\n    ErrorMessage: $this->message\n    RequestId: $this->requestId\n}\n";
    }
    
    /**
     * Get Aliyun_Log_Exception error code.
     *
     * @return string
     */
    public function getErrorCode() {
        return $this->code;
    }
    
    /**
     * Get Aliyun\Log\Exception error message.
     *
     * @return string
     */
    public function getErrorMessage() {
        return $this->message;
    }
    
    /**
     * Get log service sever requestid, '' is set if client or Http error.
     *
     * @return string
     */
    public function getRequestId() {
        return $this->requestId;
    }
}

