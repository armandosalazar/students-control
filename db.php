<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "school", 8889);
$mysqli->query("INSERT INTO users (name, lastname, motherlastname, register, career, email, password) VALUES ('$_POST[username]', '$_POST[lastname]', '$_POST[motherlastname]', '$_POST[register]', '$_POST[career]', '$_POST[email]', '$_POST[password]')");
