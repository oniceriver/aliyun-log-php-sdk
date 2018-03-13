<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Response;

/**
 * Class ListMachineGroupsResponse
 * @package Aliyun\Log\Models\Response
 */
class ListMachineGroupsResponse extends Response {

    private $offset;
    private $size;
    private $machineGroups;
    /**
     * ListMachineGroupsResponse constructor
     *
     * @param array $resp
     *            GetLogs HTTP response body
     * @param array $header
     *            GetLogs HTTP response header
     */
    public function __construct($resp, $header) {
        parent::__construct ( $header );
        $this->offset = $resp['offset'];
        $this->size = $resp['size'];
        $this->machineGroups = $resp['machinegroups'];
    }

    public function getOffset(){
        return $this->offset;
    }

    public function getSize(){
        return $this->size;
    } 
    
    public function getMachineGroups(){
        return $this->machineGroups;
    } 
}
