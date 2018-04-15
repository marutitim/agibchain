<?php
namespace App\Util;

class RandomNumber {

    public static function randString($length) {
        $charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                . '0123456789';
        $str = '';
        $count = strlen($charset);
        while ($length--) {
            $str .= $charset[mt_rand(0, $count - 1)];
        }
        return $str;
    }

    public static function verificationCode() {
        $time = dechex(round(microtime(TRUE)*10000));
        $rand = self::randString(6);
        return strtoupper($time . $rand);
    }
    
    public static function paymentNumber() {
        $time = dechex(round(microtime(TRUE)*10000));
        $rand = self::randString(5);
        return strtoupper('P'.$time . $rand);
    }
    
    public static function invoiceNumber() {
        $time = dechex(round(microtime(TRUE)));
        $rand = self::randString(5);
        return strtoupper('I'.$time . $rand);
    }
    
    public static function transactionNumber() {
        $time = dechex(round(microtime(TRUE)*10000));
        $rand = self::randString(2);
        return strtoupper('T'.$time . $rand);
    }
    public static function shopNumber($id) {
        $rand = self::randString(2);
        return strtoupper('S'.$id. $rand);
    }
    
}
