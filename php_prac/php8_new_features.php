<?php

$string = "ramamamamma <br> \n";

echo htmlspecialchars($string, double_encode:false);

echo
htmlspecialchars($string, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);

class abcd
{
    public function __construct(
        public $x = 10,
        protected $y = 0,
        private $z = 20,
    ) {
    }

}

print_r(new abcd());


if (0 === 'rama') {
    echo "TREUE";
} else {
    echo "FALSE";
}
