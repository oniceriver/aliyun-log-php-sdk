<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class DeleteMachineGroupRequest
 * @package Aliyun\Log\Models\Request
 */
class DeleteMachineGroupRequest extends Request {


    private $groupName;

    /**
     * DeleteMachineGroupRequest constructor.
     *
     * @param string $groupName
     */
    public function __construct($groupName) {
        $this->groupName = $groupName;
    }

    public function getGroupName(){
        return $this->groupName;
    }

    public function setGroupName($groupName){
        $this->groupName = $groupName;
    }
    
}
