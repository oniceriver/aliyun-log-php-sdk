<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class RemoveConfigFromMachineGroupRequest
 * @package Aliyun\Log\Models\Request
 */
class RemoveConfigFromMachineGroupRequest extends Request {
    private $groupName;
    private $configName;

    /**
     * RemoveConfigFromMachineGroupRequest constructor.
     *
     * @param null $groupName
     * @param null $configName
     */
    public function __construct($groupName=null,$configName=null) {
        $this->groupName = $groupName;
        $this->configName = $configName;
    }
    public function getGroupName(){
        return $this->groupName;
    }
    public function setGroupName($groupName){
        $this->groupName = $groupName;
    }

    public function getConfigName(){
        return $this->configName;
    }
    public function setConfigName($configName){
        $this->configName = $configName;
    }
    
}
