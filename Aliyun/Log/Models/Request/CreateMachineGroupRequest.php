<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class CreateMachineGroupRequest
 * @package Aliyun\Log\Models\Request
 */
class CreateMachineGroupRequest extends Request {

    private $machineGroup;

    /**
     * CreateMachineGroupRequest constructor.
     *
     * @param null $machineGroup
     */
    public function __construct($machineGroup=null) {
        $this->machineGroup = $machineGroup;
    }
    public function getMachineGroup(){
        return $this->machineGroup;
    }
    public function setMachineGroup($machineGroup){ 
        $this->machineGroup = $machineGroup;
    }
 
}
