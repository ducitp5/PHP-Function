<input type="text" id="searchInput" placeholder="Search for a name">

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
    // Get references to the input field and table
    const searchInput = document.getElementById('searchInput');
    const dataTable = document.getElementById('dataTable');
    const rows = dataTable.getElementsByTagName('tr');

    // Add an event listener to the input field
    searchInput.addEventListener('keyup', function () {
        const searchTerm = searchInput.value.toLowerCase();

        // Loop through the table rows and hide/show them based on the search term
        for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
            const row = rows[i];
            const name = row.cells[0].textContent.toLowerCase();
            const email = row.cells[1].textContent.toLowerCase();

            if (name.includes(searchTerm) || email.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    });

</script>
