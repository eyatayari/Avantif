<?php
/**
 * Created by PhpStorm.
 * User: EYA
 * Date: 13/12/2022
 * Time: 13:58
*/
use \Illuminate\Support\Facades\Auth;

function checkAuthUser() {
    $user=null;
    $name='';
    $type='';

    if(Auth::guard('gerent')->check()){
        $user=Auth::guard('gerent')->user();

        $name=Auth::guard('gerent')->user()->nom .' '.Auth::guard('gerent')->user()->prenom;
        $image='assets/img/gerent/'.Auth::guard('gerent')->user()->image;
        $type="gérent";
    }
    if(Auth::guard('prestataire')->check()){
        $user=Auth::guard('prestataire')->user();

        $name=Auth::guard('prestataire')->user()->nom .' '.Auth::guard('prestataire')->user()->prenom;
        $image='assets/img/prestataires/'.Auth::guard('prestataire')->user()->image;
        $type="prestataire";
    }
    if(Auth::guard('client')->check()){
        $user=Auth::guard('client')->user();

        $name=Auth::guard('client')->user()->name ;
        $image='assets/img/clients/'.Auth::guard('client')->user()->image;
        $type="client";
    }



    return [
        'user' => $user ,
        'name' => $name,
        'type'=>$type,
        'image'=>$image
    ];}