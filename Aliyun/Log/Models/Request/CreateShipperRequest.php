<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

namespace Aliyun\Log\Models\Request;

/**
 * Class CreateShipperRequest
 * @package Aliyun\Log\Models\Request
 */
class CreateShipperRequest extends Request {
    private $shipperName;

    private $targetType;

    private $targetConfiguration;

    private $logStore;

    /**
     * @return mixed
     */
    public function getLogStore()
    {
        return $this->logStore;
    }

    /**
     * @param mixed $logStore
     */
    public function setLogStore($logStore)
    {
        $this->logStore = $logStore;
    }

    /**
     * CreateShipperRequest constructor.
     *
     * @param string $project
     */
    public function __construct($project) {
        parent::__construct ( $project );
    }

    /**
     * @return mixed
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * @param mixed $shipperName
     */
    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
    }

    /**
     * @return mixed
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * @param mixed $targetType
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;
    }

    /**
     * @return mixed
     */
    public function getTargetConfiguration()
    {
        return $this->targetConfiguration;
    }

    /**
     * @param mixed $targetConfiguration
     */
    public function setTargetConfiguration($targetConfiguration)
    {
        $this->targetConfiguration = $targetConfiguration;
    }
}