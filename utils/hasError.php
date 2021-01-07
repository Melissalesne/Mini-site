<?php

if (!function_exists("hasError"))
{
    function hasError(string $field): ?string
    {
        if ( isset($_SESSION['errors'][$field]) )
        {
            return '<p class="invalid-feedback">'. $_SESSION['errors'][$field] .'</p>';
        }

        return null;

    }
}