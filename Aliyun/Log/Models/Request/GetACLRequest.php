<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class GetACLRequest
 * @package Aliyun\Log\Models\Request
 */
class GetACLRequest extends Request {
    
    private $aclId;

    /**
     * GetACLRequest constructor.
     *
     * @param null $aclId
     */
    public function __construct($aclId=null) {
        $this->aclId = $aclId;
    }
    public function getAclId(){
        return $this->aclId;
    } 
    public function setAclId($aclId){
        $this->aclId = $aclId;
    }
}
