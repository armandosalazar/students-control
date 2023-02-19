<?php

function getConnection()
{
    return mysqli_connect("127.0.0.1", "root", "root", "school", 8889);
}
