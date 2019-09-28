
<link href="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.css" rel="stylesheet">

<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.15.4/dist/extensions/mobile/bootstrap-table-mobile.min.js"></script>

<table
    id="table"
    data-toggle="table">
    <thead>
        <tr>
            <th data-sortable="true">ID</th>
            <th data-sortable="true">Item Name</th>
            <th data-sortable="true">Item Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
        </tr>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
        </tr>
    </tbody>
</table>

<script>
    $table = $('#table')
    window.onresize = function () {
        if(window.innerWidth > 700){
            console.log('change');
            $table.bootstrapTable('toggleView');
        }
    }
</script>