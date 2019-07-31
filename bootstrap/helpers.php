<?php

function route_class()
{
    return str_replace('.','_',\Illuminate\Support\Facades\Route::currentRouteName());
}