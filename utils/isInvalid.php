<?php 

if (!function_exists("isInvalid"))
{
    function isInvalid($field): ?string
    {
        if (isset( $_SESSION['errors'][$field] ))
        {
            return "is-invalid";
        }

        return null;
    }
}