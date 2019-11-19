<?php

function dwz($url){
    $json = file_get_contents("http://yy.gongju.at/?a=addon&m=wxdwz&token=cb832b64176ada39fe6778de13fbc6&long=" . urlencode($url));
    $arr = json_decode($json, true);
    if ($arr['ret_code'] == 0) {
        return $arr['short'];
    } else {
        return $arr['msg'];
    }
}

echo dwz('a.leecq.xyz');