
<?php
echo ini_get('display_errors');

if (!ini_get('display_errors')) {
    ini_set('display_errors', '2');
}

echo ini_get('display_errors');
?>
