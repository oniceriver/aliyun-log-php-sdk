<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class UpdateConfigRequest
 * @package Aliyun\Log\Models\Request
 */
class UpdateConfigRequest extends Request {

    private $config;

    /**
     * UpdateConfigRequest constructor.
     *
     * @param $config
     */
    public function __construct($config) {
        $this->config = $config;
    }

    public function getConfig(){
        return $this->config;
    }

    public function setConfig($config){
        $this->config = $config;
    }
    
}
