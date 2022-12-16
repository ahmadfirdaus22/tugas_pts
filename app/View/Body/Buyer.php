<div>
    <div class="title">Buyers</div>
    <button class="add"><a href="<?= \OOP\app\Core\Router::url("buyer/add") ?>" class="ad">New Buyer</a></button>
    <div class="card3">
        <table class="main">
            <tr class="head">
                <td>No</td>
                <td>Company Name</td>
                <td>Email</td>
                <td>Country</td>
                <td>Address</td>
                <td>Created at</td>
                <td>Updated at</td>
                <td>Action</td>
            </tr>
            <?php $no = 1;
            foreach ($data as $row) { ?>
                <tr>
                    <form action="<?= \OOP\app\Core\Router::url("buyer/update/$row->id") ?>" method="POST">
                        <input type="text" value="<?= $row->id ?>" name="id" hidden>
                        <td><?= $no++ ?></td>
                        <td><?= $row->company_name ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->country ?></td>
                        <td><?= $row->address ?></td>
                        <td><?= $row->created_at ?></td>
                        <td><?= $row->updated_at ?></td>
                        <td>
                            <button type="submit" class="update">Update</button>
                            <button formaction="<?= \OOP\app\Core\Router::url("buyer/delete") ?>" class="delete">Delete</button>
                        </td>
                    </form>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>