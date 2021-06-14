<?php
//first task requests
$form_request = "SELECT name,ID_CLIENT FROM client";
$first_request = "SELECT start,stop,in_trafic,out_trafic FROM seanse WHERE FID_Client = ? ";

//second task requests
$second_request = "SELECT start,stop,in_trafic,out_trafic FROM seanse WHERE start <= :start AND stop >= :finish";

//third task requests
$third_request = "SELECT name,balance FROM client WHERE balance < 0";