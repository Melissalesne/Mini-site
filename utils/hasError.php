<?php 

if (!function_exists("hasError"))
{
    function hasError($field): ?string
    {
        if (isset( $_SESSION['errors'][$field] ))
        {
            return "hasError";
        }

        return null;
    }
}