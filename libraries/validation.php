<?php

function is_username($username)
{
    $pattern = "/^[A-Za-z0-9_\.]{3,32}$/";
    if (!preg_match($pattern, $username, $matches)) {
        return false;
    }
    return true;
}

function is_password($password)
{
    $pattern = "/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/";
    if (!preg_match($pattern, $password, $matches)) {
        return false;
    }
    return true;
}

function is_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function form_error($label_field)
{
    global $error;
    if (!empty($error[$label_field]))
        return "<p class='error'>$error[$label_field]</p>";
}


function set_value($label_filed)
{
    global $$label_filed;
    if (!empty($$label_filed)) return $$label_filed;
}
