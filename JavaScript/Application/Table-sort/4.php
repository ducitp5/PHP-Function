<table border="0">
    <thead>
        <tr>
            <th scope="col">Position number</th>
            <th scope="col">Name</th>
            <th scope="col">FName</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>Text</td>
            <td>aa</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Text3</td>
            <td>bb</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Text3</td>
            <td>bb</td>
        </tr>
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        // Start order number
        let orderNumber = 5;

        // Select the first column (Position number) in the table body and update its content
        $('tbody tr').each(function() {
            const firstCell = $(this).find('td:first-child');
            firstCell.text(orderNumber);
            orderNumber++;
        });
    });
</script>
