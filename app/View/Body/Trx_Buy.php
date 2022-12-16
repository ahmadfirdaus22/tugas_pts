<div>
    <div class="title">Transaction Buy</div>
    <button class="add"><a href="<?= \OOP\app\Core\Router::url("transaction_buy/add") ?>" class="ad">New Transaction</a></button>
    <table class="main">
        <tr class="head">
            <td>No</td>
            <td>Date</td>
            <td>Exporter Name</td>
            <td>Buyer Name</td>
            <td>Supplier Name</td>
            <td>Product Name</td>
            <td>Updated at</td>
            <td>Action</td>
        </tr>
        <?php $no=1; foreach($data as $row){ ?>
        <tr>
            <form action="<?= \OOP\app\Core\Router::url("transaction_buy/update/$row->id") ?>" method="POST">
                <input type="text" name="id" hidden value="<?= $row->id ?>"> 
                <td><?= $no++ ?></td>
                <td><?= $row->date ?></td>
                <td><?= $row->name ?></td>
                <td><?= $row->buyer_name ?></td>
                <td><?= $row->supplier_name ?></td>
                <?php foreach($data2 as $row2){ ?>
                <?php if($row->product_id == $row2->id){echo '<td>'.$row2->name.'</td>';}?>
                <?php } ?>
                <td><?= $row->updated_at?></td>
                <td>
                    <button class="detail" formaction="<?= \OOP\app\Core\Router::url("transaction_buy/detail/$row->id") ?>">Detail</button>
                    <button type="submit" class="update">Update</button>
                    <button style="margin-left: 0px;" formaction="<?= \OOP\app\Core\Router::url("transaction_buy/delete") ?>" class="delete">Delete</button>
                </td>
            </form>
        </tr>
        <?php } ?>
    </table>
</div>