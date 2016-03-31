<?php

if (isset($bang) && count($bang)) {
    foreach ($bang as $key => $value) {
       // echo ($key).' - '.$value['maKhachHang'].' - '.$value['maLoaiKhachHang'].' - '.$value['tenKhachHang'].' - '.$value['email'];
    echo ($key).'<br/>';
    print_r($value[3]);
       // echo $key.'-'.$value.'</br>';
    }
}