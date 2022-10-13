<?php

$ddate = "13/6/2022 08:45:50";

$myDateTime = DateTime::createFromFormat('d/m/Y H:i:s', $ddate, new DateTimeZone('Europe/Berlin'));
dd($myDateTime);