<?php

$a = md5(time().rand(10000,9999999));
echo substr($a,0,10);