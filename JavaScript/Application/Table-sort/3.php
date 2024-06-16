<table class="sortable" id="sortable-table">
    <thead>
    <tr>
        <th data-column="name">Name</th>
        <th data-column="email">Email</th>
        <!-- Add more columns as needed -->
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>John Doe</td>
        <td>john@example.com</td>
    </tr>
    <tr>
        <td>Jane Smith</td>
        <td>jane@example.com</td>
    </tr>
    <!-- Add more rows as needed -->
    </tbody>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    $(document).ready(function() {

        $('th').click(function(){
            var table = $(this).parents('table').eq(0)
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
            this.asc = !this.asc
            if (!this.asc){rows = rows.reverse()}
            for (var i = 0; i < rows.length; i++){table.append(rows[i])}
        })
        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index)
                return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
            }
        }
        function getCellValue(row, index){ return $(row).children('td').eq(index).text() }

    });

</script>
