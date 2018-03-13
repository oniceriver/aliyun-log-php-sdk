<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */
namespace Aliyun\Log\Models\LogLevel;
class LogLevel{
    const debug = 'debug';
    const info = 'info';
    const warn = 'warn';
    const error = 'error';

    private static $constCacheArray = NULL;

    private $level;

    /**
     * Constructor
     *
     * @param string $level
     */
    private function __construct($level) {
        $this->level = $level;
    }

    /**
     * Compares two logger levels.
     *
     * @param LoggerLevels $other
     * @return boolean
     */
    public function equals($other) {
        if($other instanceof LogLevel) {
            if($this->level == $other->level) {
                return true;
            }
        } else {
            return false;
        }
    }

    public static function getLevelDebug(){
        if(!isset(self::$constCacheArray[static::debug])){
            self::$constCacheArray[static::debug] = new LogLevel('debug');
        }
        return self::$constCacheArray[static::debug];
    }

    public static function getLevelInfo(){
        if(!isset(self::$constCacheArray[static::info])){
            self::$constCacheArray[static::info] = new LogLevel('info');
        }
        return self::$constCacheArray[static::info];
    }

    public static function getLevelWarn(){
        if(!isset(self::$constCacheArray[static::warn])){
            self::$constCacheArray[static::warn] = new LogLevel('warn');
        }
        return self::$constCacheArray[static::warn];
    }

    public static function getLevelError(){
        if(!isset(self::$constCacheArray[static::error])){
            self::$constCacheArray[static::error] = new LogLevel('error');
        }
        return self::$constCacheArray[static::error];
    }

    public static function getLevelStr(LogLevel $logLevel){

        $logLevelStr = '';
        if(null === $logLevel){
            $logLevelStr = 'info';
        }
        switch ($logLevel->level){
            case "error":
                $logLevelStr= 'error';
                break;
            case "warn":
                $logLevelStr= 'warn';
                break;
            case "info":
                $logLevelStr= 'info';
                break;
            case "debug":
                $logLevelStr= 'debug';
                break;
        }
        return $logLevelStr;
    }
}