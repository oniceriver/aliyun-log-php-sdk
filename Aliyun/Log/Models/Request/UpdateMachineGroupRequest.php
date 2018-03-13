<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class UpdateMachineGroupRequest
 * @package Aliyun\Log\Models\Request
 */
class UpdateMachineGroupRequest extends Request {

    private $machineGroup;

    /**
     * UpdateMachineGroupRequest constructor.
     *
     * @param $machineGroup
     */
    public function __construct($machineGroup) {
        $this->machineGroup = $machineGroup;
    }

    public function getMachineGroup(){
        return $this->machineGroup;
    }

    public function setMachineGroup($machineGroup){
        $this->machineGroup = $machineGroup;
    }

    
}
