<?php

class Config
{
    static function init() {
        $path = __DIR__ . "/../.env";
        if(file_exists($path)) {
            $env = fopen($path, "r");

            try {
                while(!feof($env)) {
                    $line = fgets($env);
                    $line = trim($line);
                    $line = explode("=", $line);

                    if(count($line) == 2) {
                        $key = trim($line[0]);
                        $value = trim(trim(trim($line[1]), '"'), "'");

                        if(!empty($key) && !empty($value)) {
                            if(preg_match("/^[a-zA-Z0-9_]+$/", $key)) {
                                if(!defined($key)) {
                                    define(strtoupper($key), $value);
                                }
                            }
                        }
                    }
                }
            } catch(\Throwable $e) {
                echo "error in loading env";
            }

            fclose($env);
        } else {
            echo "env not found";
        }
    }

    static function get($key) {
        if(defined($key)) {
            return constant($key);
        }

        return null;
    }

    // for database conection
    // public  $db_host = 'localhost';
    // public $db_name = 'tms';
    // public $db_user = "";
    // public $db_pass = '';

    // // for sms (mnotify)
    // public $apikey = "7j4dvJq18adHHitlkBgLiHP9j";

    // // for momo payment Paystack

    // public $public_key = "pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a";

    // public $currency_code = "GHS";  //you can set GHS for Ghana, USD for Dollar , NG for Nageria

    // public $callback_url ="/tms/success" ;
}
