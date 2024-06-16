<!DOCTYPE html>
<html>
<head>
    <style>
        div {
            height: 40px;
            overflow-y: scroll;
            padding: 2%;
            box-shadow: inset 0 0 12px lightgreen;
        }
        tr th {
            /*background: #25f2f1;*/
        }
        table {
            text-align: center;
            /*position: relative;*/
            /*border-collapse: separated;*/
            width: 100%;
        }
        th {
            position: sticky;
            top: 0;
            background: white;
        }
    </style>
</head>
<body>
<div>
    <table>
        <thead>
            <tr>
                <th>A </th>
                <th>B </th>
                <th>C </th>
                <th>D </th>
                <th>E </th>
            </tr>
        </thead>
        <tbody>
<?php
    for($i = 1; $i < 100; $i++){
?>
            <tr>
                <td>Hey</td>
                <td>Hey</td>
                <td>Hey</td>
                <td>Hey</td>
                <td>Hey</td>
            </tr>
<?php
    }
?>
        </tbody>

    </table>
</div>
</body>
</html>
