<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * The request used to delete logstore from log service.
 * Class DeleteLogstoreRequest
 * @package Aliyun\Log\Models\Request
 */
class DeleteLogstoreRequest extends Request{

    private  $logstore;

    /**
     * DeleteLogstoreRequest constructor.
     *
     * @param null $project
     * @param null $logstore
     */
    public function __construct($project=null,$logstore = null) {
        parent::__construct($project);
        $this -> logstore = $logstore;
    }
    public function getLogstore()
    {
        return $this -> logstore;
    }
}
