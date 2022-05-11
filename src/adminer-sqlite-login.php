<?php

if (!function_exists("adminer_object"))
{
    function adminer_object()
    {
        class AdminerSqliteLogin extends Adminer
        {
            public function login($ce, $G)
            {
                return true;
            }
        }
        return new AdminerSqliteLogin;
    }
}    
