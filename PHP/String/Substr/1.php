<?php

echo substr("hi lân  你好 â a", 0 , 20) .'<br>'; // will print hi m�
echo mb_substr("hi lân  你好 â a", 0 , 10, 'UTF-8'); // will print hi mé
