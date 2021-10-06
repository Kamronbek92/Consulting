<?php

declare(strict_types=1);

$connect = mysqli_connect(hostname:'localhost', username: 'root', password: '', database: 'consulting');


if (!$connect) {
    die('Error connect to db!');
}
