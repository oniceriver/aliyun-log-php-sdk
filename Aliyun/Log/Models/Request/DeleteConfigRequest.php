<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class DeleteConfigRequest
 * @package Aliyun\Log\Models\Request
 */
class DeleteConfigRequest extends Request {

    private $configName;

    /**
     * DeleteConfigRequest constructor.
     *
     * @param null $configName
     */
    public function __construct($configName=null) {
        $this->configName = $configName;
    }

    public function getConfigName(){
        return $this->configName;
    }

    public function setConfigName($configName){
        $this->configName=$configName;
    }
    
}
