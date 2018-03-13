<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class GetConfigRequest
 * @package Aliyun\Log\Models\Request
 */
class GetConfigRequest extends Request {

    private $configName;

    /**
     * GetConfigRequest constructor.
     *
     * @param null $configName
     */
    public function __construct($configName = null) {
        $this->configName = $configName;
    }

    public function getConfigName(){
      return $this->configName;
    }

    public function setConfigName($configName){
      $this->configName = $configName;
    }
    
}
