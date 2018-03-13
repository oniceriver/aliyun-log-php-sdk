<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * The request used to list logstore from log service.
 * Class ListLogstoresRequest
 * @package Aliyun\Log\Models\Request
 */
class ListLogstoresRequest extends Request{

    /**
     * ListLogstoresRequest constructor.
     *
     * @param null $project
     */
    public function __construct($project=null) {
        parent::__construct($project);
    }
}
