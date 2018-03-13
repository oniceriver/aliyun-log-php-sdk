<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class GetMachineGroupRequest
 * @package Aliyun\Log\Models\Request
 */
class GetMachineGroupRequest extends Request {

    private $groupName;

    /**
     * GetMachineGroupRequest constructor.
     *
     * @param null $groupName
     */
    public function __construct($groupName=null) {
        $this->groupName = $groupName;
    }
    public function getGroupName(){
        return $this->groupName;
    } 
    public function setGroupName($groupName){
        $this->groupName = $groupName;
    }
    
}
