<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function index() {
        return view('sign/index');
    }

    public function yourSign(Request $request) {
        $month = $request->month;
        $day = $request->day;
        if ($month==3 && $day>=21) {
            $result = "おひつじ座";
        } elseif($month==4 && $day<=19) {
            $result = "牡羊座";
        } elseif($month==4 && $day>=20) {
            $result = "牡牛座";
        } elseif($month==5 && $day<=20) {
            $result = "牡牛座";
        } elseif($month==5 && $day>=21) {
            $result = "双子座";
        } elseif($month==6 && $day<=21) {
            $result = "双子座";
        } elseif($month==6 && $day>=22) {
            $result = "蟹座";
        } elseif($month==7 && $day<=22) {
            $result = "蟹座";
        } elseif($month==7 && $day>=23) {
            $result = "獅子座";
        } elseif($month==8 && $day<=22) {
            $result = "獅子座";
        } elseif($month==8 && $day>=23) {
            $result = "乙女座";
        } elseif($month==9 && $day<=22) {
            $result = "乙女座";
        } elseif($month==9 && $day>=23) {
            $result = "天秤座";
        } elseif($month==10 && $day<=23) {
            $result = "天秤座";
        } elseif($month==10 && $day>=24) {
            $result = "蠍座";
        } elseif($month==11 && $day<=22) {
            $result = "蠍座";
        } elseif($month==11 && $day>=23) {
            $result = "射手座";
        } elseif($month==12 && $day<=21) {
            $result = "射手座";
        } elseif($month==12 && $day>=22) {
            $result = "山羊座";
        } elseif($month==1 && $day<=19) {
            $result = "山羊座";
        } elseif($month==1 && $day>=20) {
            $result = "水瓶座";
        } elseif($month==2 && $day<=18) {
            $result = "水瓶座";
        } else {
            $result = "魚座";
        }
        return view('sign/result', ['result' => $result, 'month' => $month, 'day' => $day]);
    }
}