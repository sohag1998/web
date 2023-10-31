<?php

$conn = new mysqli("localhost", "weblab", "weblab", "programmer");

if(!$conn){
    echo "Fail to connect";
}