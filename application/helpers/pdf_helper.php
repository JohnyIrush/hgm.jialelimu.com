<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


function tcpdf()
{
    require_once(dirname(__FILE__) .'/tcpdf/config/eng.php');
    require_once(dirname(__FILE__) .'/tcpdf/tcpdf.php');
}