<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class GetMachineRequest
 * @package Aliyun\Log\Models\Request
 */
class GetMachineRequest extends Request {
    
    private $uuid;

    /**
     * GetMachineRequest constructor.
     *
     * @param null $uuid
     */
    public function __construct($uuid=null) {
        $this->uuid = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }

    public function setUuid($uuid){
        $this->uuid = $uuid;
    }
    
}
