<?php

    function lang($phrase) {

        static $lang = [

            // homepage
            
            "message" => "welcome",
            "admin" => "adminstrator"

            //setting
        ];

        return $lang[$phrase];
    }

