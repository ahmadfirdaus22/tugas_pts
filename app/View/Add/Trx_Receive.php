<div class="wrap">
    <div class="card3">
        <h1 class="form_title">Add Transaction</h1>
        <form action="<?= \OOP\app\Core\Router::url("transaction_receive/adding") ?>" method="post">
            <p class="form_name">Transaction Buy</p>
            <select name="trx_buy_id" class="form_select">
                <?php $a=0; foreach($data as $row){ ?>
                    <?php 
                    if($data3 != 0){
                        foreach($data2 as $row2){
                            if($row->id != $row2->trx_buy_id){
                                $a++;
                                echo "console.log(".$a.")";
                                if($a == $data3){
                                    echo '<option value='. $row->id .' >'. $row->date .'-'. $row->name .'-'. $row->buyer_name .'-'. $row->supplier_name .'</option>' ;
                                    $a=0;
                                }
                            } 
                        }
                    }
                    else{
                        echo '<option value='. $row->id .' >'. $row->date .'-'. $row->name .'-'. $row->buyer_name .'-'. $row->supplier_name .'</option>' ; 
                    }
                    $a=0;
                    ?>
                <?php } ?>
                </select>
                <br>
            <button type="submit" class="submit_form">Submit</button>
        </form>
    </div>
</div>