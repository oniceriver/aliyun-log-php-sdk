<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models;
/**
 * CompressedLogGroup is compressed LogGroup,
 * LogGroup infomation please refer to Aliyun\Log\Models\LogGroup
 *
 * @author log service dev
 */
class CompressedLogGroup {

    /**
     * @var integer uncompressed LogGroup size
     *
     */
    protected $uncompressedSize;

    /**
     * @var integer uncompressed LogGroup size
     *
     */
    protected $compressedData;

    protected $time;

    protected $contents;

    public function __construct($time = null, $contents = null) {
        if (! $time)
            $time = time ();
        $this->time = $time;
        if ($contents)
            $this->contents = $contents;
        else
            $this->contents = array ();
    }
    
}
