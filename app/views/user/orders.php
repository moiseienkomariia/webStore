<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?= PATH ?>">Home</a></li>
                <li><a href="<?= PATH ?>/user/myaccount">My account</a></li>
                <li>Order history</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->

<div class="container">
    <div class="col-md-12">
        <hr>
        <?php if ($orders): ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10%">ID</th>
                            <th style="width: 20%">Status</th>
                            <th style="width: 20%">Amount</th>
                            <th style="width: 10%">Currency</th>
                            <th style="width: 20%">Create date</th>
                            <th style="width: 20%">Update date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order): ?>
                        <?php
                        if ($order['status'] == '1') {
                            $class = 'success';
                            $status = 'completed';
                        } elseif ($order['status'] == '2') {
                            $class = 'info';
                            $status = 'paid';
                        } else {
                            $class = '';
                            $status = 'new';
                        }
                        ?>
                            <tr class="<?=$class?>">
                                <td><?=$order->id;?></td>
                                <td><?=$status?></td>
                                <td><?=$order->sum;?></td>
                                <td><?=$order->currency;?></td>
                                <td><?=$order->date;?></td>
                                <td><?=$order->update_date;?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-danger"></p>
        <?php endif; ?>
    </div>
</div>
