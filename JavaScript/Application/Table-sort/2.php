<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        body
        {
            text-align:center;
            width:100%;
            margin:0 auto;
            padding:0px;
            font-family:helvetica;
            background-color:#B45F04;
        }
        #wrapper
        {
            text-align:center;
            margin:0 auto;
            padding:0px;
            width:995px;
        }
        #mytable
        {
            text-align:center;
        }
        #mytable th
        {
            color:white;
            font-size:18px;
            cursor:pointer;
        }
        #mytable td
        {
            color:white;
            font-size:17px;
            border:1px solid;
        }
    </style>

</head>
<body>

<div id="wrapper">
    <table id="mytable" cellpadding="7" align="center">
        <thead>
            <tr>
                <th onclick="sort_name();">SORT NAME</th>
                <th onclick="sort_age();">SORT AGE</th>
            </tr>
        </thead>

        <tbody id="table1">
            <tr>
                <td>Aman</td><td>28</td>
            </tr>
            <tr>
                <td>Rahul</td><td>36</td>
            </tr>
            <tr>
                <td>Amit</td><td>21</td>
            </tr>
            <tr>
                <td>Suresh</td><td>34</td>
            </tr>
            <tr>
                <td>Karan</td><td>14</td>
            </tr>
            <tr>
                <td>Pooja</td><td>24</td>
            </tr>
        </tbody>
    </table>

    <input type="hidden" id="name_order" value="asc">
    <input type="hidden" id="age_order" value="asc">
</div>

<script>
    function sort_name()
    {
        var table=$('#mytable');
        var tbody =$('#table1');

        tbody.find('tr').sort(function(a, b)
        {
            if($('#name_order').val()=='asc')
            {
                return $('td:first', a).text().localeCompare($('td:first', b).text());
            }
            else
            {
                return $('td:first', b).text().localeCompare($('td:first', a).text());
            }

        }).appendTo(tbody);

        var sort_order=$('#name_order').val();
        if(sort_order=="asc")
        {
            document.getElementById("name_order").value="desc";
        }
        if(sort_order=="desc")
        {
            document.getElementById("name_order").value="asc";
        }
    }

    function sort_age()
    {
        var table=$('#mytable');
        var tbody =$('#table1');

        tbody.find('tr').sort(function(a, b)
        {
            if($('#age_order').val()=='asc')
            {
                return $('td:last', a).text().localeCompare($('td:last', b).text());
            }
            else
            {
                return $('td:last', b).text().localeCompare($('td:last', a).text());
            }

        }).appendTo(tbody);

        var sort_order=$('#age_order').val();
        if(sort_order=="asc")
        {
            document.getElementById("age_order").value="desc";
        }
        if(sort_order=="desc")
        {
            document.getElementById("age_order").value="asc";
        }
    }
</script>
</body>
</html>
