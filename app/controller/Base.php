<?php
include APPLICATIONPATH.'helper/view.php';

class Base
{
    use View;

    function __construct()
    {
        echo __class__ . " has been loaded";
    }

}
