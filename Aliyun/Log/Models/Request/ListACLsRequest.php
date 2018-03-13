<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class ListACLsRequest
 * @package Aliyun\Log\Models\Request
 */
class ListACLsRequest extends Request {

    private $offset;
    private $size;
    private $principleId;

    /**
     * ListACLsRequest constructor.
     *
     * @param null $principleId
     * @param null $offset
     * @param null $size
     */
    public function __construct($principleId=null,$offset=null,$size=null) {
        $this->offset = $offset;
        $this->size = $size;
        $this->principleId = $principleId;
    }

    public function getOffset(){
        return $this->offset;
    }
    public function setOffset($offset){
        $this->offset = $offset;
    }

    public function getSize(){
        return $this->size;
    }
    public function setSize($size){
        $this->size = $size;
    }
    
    public function getPrincipleId(){
        return $this->principleId;
    }
    public function setPrincipleId($principleId){
        $this->principleId = $principleId;
    }

}
