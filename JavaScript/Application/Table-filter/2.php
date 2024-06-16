<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<input type="text" id="nameFilter" placeholder="Filter by Name">
<input type="text" id="emailFilter" placeholder="Filter by Email">

<table id="dataTable">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John Doe</td>
            <td>John Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>John Doe</td>
            <td>jane@example.com</td>
        </tr>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@mail.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@greatstuff.com</td>
        </tr>
        <tr>
            <td>Anja</td>
            <td>Ravendale</td>
            <td>a_r@test.com</td>
        </tr>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        // Get references to the input fields and the table
        const nameFilter = $('#nameFilter');
        const emailFilter = $('#emailFilter');
        const dataTable = $('#dataTable');

        // Add event listeners to the input fields
        nameFilter.on('input', function() {
            filterTable('Name', this.value);
        });

        emailFilter.on('input', function() {
            filterTable('Email', this.value);
        });

        function filterTable(columnName, filterText) {
            dataTable.find('tbody tr').each(function() {
                const row = $(this);
                const cellText = row.find(`td:eq(${columnName === 'Name' ? 0 : 1})`).text().toLowerCase();

                if (cellText.includes(filterText.toLowerCase())) {
                    row.show();
                } else {
                    row.hide();
                }
            });
        }
    });

</script>
