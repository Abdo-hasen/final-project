<?php

    function lang($phrase) {

        static $lang = [

            "message" => " مرحبا يا",
            "admin" => "ادمن"
        ];

        return $lang[$phrase];
    }

