<?php

// Pre PHP 8.0: E_PARSE | Unexpected '__FILE__' (T_FILE), expecting T_STRING in ...
// PHP 8.0+:    E_PARSE | Unexpected token "__FILE__", expecting identifier in ...

const __FILE__ = $a;
