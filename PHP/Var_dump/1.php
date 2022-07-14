<?php
$a = array(
    1,
    2,
    3,
    array(
        "a",
        "b",
        "c"
    )
);
var_dump($a);
?>


<html>


<script type="text/javascript">

	console.log(JSON.parse(' <?=  json_encode($a)  ?> '));

</script>








</html>