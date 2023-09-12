<style>
    .table_sortable thead th.desc:after {
        content: '↑';
    }

    .table_sortable thead th.asc:after {
        content: '↓';
    }

</style>

<table id="myTable">
    <thead>
        <tr>
            <th rowspan="2" class="nosort" title="nosort">ID</th>
            <th rowspan="2">Company</th>
            <th colspan="2">Order</th>
        </tr>
        <tr>
            <th>Number</th>
            <th>Text</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Alfreds Futterkiste</td>
            <td>2</td>
            <td>Tesla</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Ernst Handel</td>
            <td>0</td>
            <td>Ford</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Island Trading</td>
            <td>1</td>
            <td>BMW</td>
        </tr>
    </tbody>
</table>

<!-- jQuery is required -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://unpkg.com/jquery-tablesortable"></script>

<script>
    $(function(){
        $table =  $('table#myTable');
        console.log($table);
        $table.tableSortable();
    });
</script>
