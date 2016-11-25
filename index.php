<?php


function func_a($arg){
    func_b($arg);
}

function func_b($arg){
    print_r($arg);
    // call debug backtrace
    var_dump(debug_backtrace());
}
echo "<h1>Debug Backtrace function 'debug_backtrace'</h1>";
func_a('hello php debug');

echo "<h1>Debug Backtrace 'exception'</h1>";
/**
 * get back trace from an exception
 */
function getBackTrace() {
    $e = new Exception();
    $backtrace = $e->getTrace();
    var_dump($backtrace);
}

function a($arg){
    b($arg);
}

function b($arg){
    d($arg);
}

function d($arg){
    var_dump($arg);
    // trigger error
    trigger_error('Custom notice ', E_USER_NOTICE);
    trigger_error('Custom error ', E_USER_ERROR);
    trigger_error('Custom warning', E_USER_WARNING);
    getBackTrace();
}

a('back trace from exception');






