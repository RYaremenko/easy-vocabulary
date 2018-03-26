<?php

if (!function_exists('writeLog')) {
    /**
     * @param string $message
     * @param string $logPath
     */
    function writeLog(string $message, string $logPath)
    {
        $log = date('[Y-m-d H:i:s]') . PHP_EOL
            . $message . PHP_EOL
            . PHP_EOL;
        file_put_contents(getLogDir() . "/$logPath-" . date('Y-m-d') . '.log', $log, FILE_APPEND | LOCK_EX);
    }
}

if (!function_exists('writeExceptionLog')) {
    /**
     * @param Exception $e
     * @param string $message
     * @param string $logPath
     */
    function writeExceptionLog(\Exception $e, string $message, string $logPath)
    {
        $log = date('[Y-m-d H:i:s]') . ' ERROR: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL
            . $e->getTraceAsString() . PHP_EOL
            . 'Message: ' . $message . PHP_EOL
            . PHP_EOL;
        file_put_contents(getLogDir() . "/$logPath-" . date('Y-m-d') . '.log', $log, FILE_APPEND | LOCK_EX);
    }
}