<?php

/**
 * OTP ganarate func
 * 
 */

 function ganarateOTP() {
    $str = "0123456789";

    $rand = str_shuffle($str);

    return $OTP = substr($rand, 2, 5);
 }