<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class ListMachineGroupsRequest
 * @package Aliyun\Log\Models\Request
 */
class ListMachineGroupsRequest extends Request {

    private $groupName;
    private $offset;
    private $size;

    /**
     * ListMachineGroupsRequest constructor.
     *
     * @param null $groupName
     * @param null $offset
     * @param null $size
     */
    public function __construct($groupName=null,$offset=null,$size=null) {
        $this->groupName = $groupName;
        $this->offset = $offset;
        $this->size = $size;
    }

    public function getGroupName(){
        return $this->groupName;
    }

    public function setGroupName($groupName){
        $this->groupName = $groupName;
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
}
