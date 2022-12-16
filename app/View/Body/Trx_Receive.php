<div>
    <div class="title">Receives</div>
    <button class="add"><a href="<?= \OOP\app\Core\Router::url("transaction_receive/add") ?>" class="ad">New Receive</a></button>
    <table class="main">
        <tr class="head">
            <td>No</td>
            <td>Date</td>
            <td>Exporter Name</td>
            <td>Buyer Name</td>
            <td>Supplier Name</td>
            <td>Product Name</td>
            <td>Action</td>
        </tr>
        <?php $no=1; foreach($data as $row){  ?>
        <tr>
            <form action="<?= \OOP\app\Core\Router::url("transaction_receive/delete") ?>" method="POST">
                <input type="text" hidden name="id" value="<?= $row->id ?>">
                <td><?= $no++ ?></td>
                <td><?= $row->dates ?></td>
                <?php foreach($data4 as $row4){ ?>
                <?php if($row->exporter_id == $row4->id){echo '<td>'.$row4->name.'</td>';}?>
                <?php } ?>
                <?php foreach($data2 as $row2){ ?>
                <?php if($row->buyer_id == $row2->id){echo '<td>'.$row2->company_name.'</td>';}?>
                <?php } ?>
                <?php foreach($data3 as $row3){ ?>
                <?php if($row->supplier_id == $row3->id){echo '<td>'.$row3->company_name.'</td>';}?>
                <?php } ?>
                <?php foreach($data5 as $row5){ ?>
                <?php if($row3->product_id == $row5->id){echo '<td>'.$row5->name.'</td>';}?>
                <?php } ?>
                <td><button type="submit" class="delete">Delete</button></td>
            </form>
        </tr>
        <?php } ?>
    </table>
</div>