<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace Aliyun\Log\Models\Request;

/**
 * Class DeleteACLRequest
 * @package Aliyun\Log\Models\Request
 */
class DeleteACLRequest extends Request {

    private $aclId;

    /**
     * DeleteACLRequest constructor.
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
