<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class CreateACLRequest
 * @package Aliyun\Log\Models\Request
 */
class CreateACLRequest extends Request {

    private $acl;

    /**
     * CreateACLRequest constructor.
     *
     * @param null $acl
     */
    public function __construct($acl=null) {
        $this->acl = $acl;
    }

    public function getAcl(){
        return $this->acl;
    }
    public function setAcl($acl){
        $this->acl = $acl;
    }
    
}
