<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

function paginateCount(){
    return 10;
}

function radomPrefix(){
    return random_int(0,9).random_int(0,9).random_int(0,9).random_int(0,9).time();
}

function uniqueKey(){
    return random_int(0,9).random_int(0,9).random_int(0,9).random_int(0,9).random_int(0,9).random_int(0,9);
}

function status($status){
    if($status == 'active'){
        return '<span class="mt-2 badge rounded-pill bg-success">Active</span>';
    }else if($status == 'pending'){
        return '<span class="mt-2 badge rounded-pill bg-primary">Pending</span>';
    }else if($status == 'rejected'){
        return '<span class="mt-2 badge rounded-pill bg-danger">Rejected</span>';
    }else if($status == 'success'){
        return '<span class="mt-2 badge rounded-pill bg-success">Success</span>';
    }
}

function dmYHis($data){
    if($data != '')
    return date('d-m-Y H:i:s', strtotime($data));
}