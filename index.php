<?php

// notice: non-fatal. probably needs improvement

// warning: noe-fatal, but something is wrong and will probably cause errors

// error: fatal. and the program is terminated (crash)

// # when php problems occur
// * compile time: when script is interpreted (no execution)
// * run time: during execution(script interpreted correctly)

# 16 error-reporting levels: each level has a constant name(used by developers) and integer value(used internally as bit field)

# common error levels
# E_ERROR- fatal run-time error (crash)
# E_WARNING- run-time waring; does not halt
# E_PARSE- compile-time error; does not execute
# E_NOTICE- run-time notice; does not halt, but there's probably something wrong
# E_STRICT- compile-time notice; does not halt, but reinforces forward compatibility and best practices
# E_DEPRECATED- run-time notice; does not halt, but will not work in future PHP versions
# E_ALL- combines all errors, warnings, and notice #tips: excludes E_STRICT until PHP 5.4
