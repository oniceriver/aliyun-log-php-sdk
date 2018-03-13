<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class UpdateACLRequest
 * @package Aliyun\Log\Models\Request
 */
class UpdateACLRequest extends Request {

    private $acl;

    /**
     * UpdateACLRequest constructor.
     *
     * @param $acl
     */
    public function __construct($acl) {
        $this->acl = $acl;
    }

    public function getAcl(){
        return $this->acl;
    }
    public function setAcl($acl){
        $this->acl = $acl;
    }
}
