<table class="purple">

    <thead>
    <tr>
        <th>STT</th>
        <th>Colonne 1</th>
        <th>Colonne 2</th>
        <th>Colonne 3</th>
    </tr>
    </thead>

    <tbody>

<?php

    for($i = 0; $i <50; $i++) {
?>
        <tr>
            <td><?= $i+1 ?></td>
            <td>Non</td>
            <td>Mais</td>
            <td>Allo !</td>
        </tr>

<?php
    }
?>
    </tbody>
</table>
