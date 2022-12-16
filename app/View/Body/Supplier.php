<div>
    <div class="title">Suppliers</div>
    <button class="add"><a href="<?= \OOP\app\Core\Router::url("supplier/add") ?>" class="ad">New Supplier</a></button>

    <table class="main">
        <tr class="head">
            <td>No</td>
            <td>Company Name</td>
            <td>Email</td>
            <td>Country</td>
            <td>Address</td>
            <td>Product Name</td>
            <td>Max Quantity(Kg)</td>
            <td>Created at</td>
            <td>Updated at</td>
            <td>Action</td>
        </tr>
        <?php $no=1; foreach($data as $row){ ?>
            <form action="<?= \OOP\app\Core\Router::url("supplier/update/$row->id") ?>" method="POST">
            <input type="text" name="id" hidden value="<?= $row->id ?>">
        <tr>
                <td><?= $no++ ?></td>
                <td><?= $row->company_name ?></td>
                <td><?= $row->email ?> </td>
                <td><?= $row->country ?></td>
                <td><?= $row->address ?></td>
                <td><?= $row->product_name ?></td>
                <td><?= $row->max_quantity ?></td>
                <td><?= $row->created_at ?></td>
                <td><?= $row->updated_at ?></td>
                <td>
                    <button type="submit" class="update">Update</button>
                    <button formaction="<?= OOP\app\Core\Router::url("supplier/delete") ?>" class="delete">Delete</button>
                </td>
            </tr>
        </form>
        <?php } ?>
    </table>
</div>