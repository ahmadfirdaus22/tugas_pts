<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Add Transaction</h1>
        <form action="<?= \OOP\app\Core\Router::url("transaction_receive/updating") ?>" method="post">
            <p class="form_name">Transaction Buy</p>
            <select name="product_id" class="form_select">
                <?php foreach($data as $row){ ?>
                    <option value="<?= $row->id ?>" <?php if($row->id == $data2->trx_buy_id){ echo 'selected';}else{'';} ?> ><?= $row->date ?> - <?= $row->name ?> - <?= $row->buyer_name ?> - <?= $row->supplier_name ?></option>
                <?php } ?>
                </select>
                <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>