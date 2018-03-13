<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class CreateConfigRequest
 * @package Aliyun\Log\Models\Request
 */
class CreateConfigRequest extends Request {

    private $config;

    /**
     * CreateConfigRequest constructor.
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
