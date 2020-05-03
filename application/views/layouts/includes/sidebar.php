<div class="cart-block">
    <form action="cart/update" method="post">
        <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
            <tr>
                <th>QTY</th>
                <th>Item Desctiption</th>
                <th style="text-align: right">Item Price</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($this->cart->contents() as $items): ?>
                <input type="hidden" name="<?php echo $i . '[rowid]';?>" value="<?php echo $items['rowid'];?>">
                       <tr>
                           <td><input type="text" name="<?php echo $i . '[qty]';?>" value="<?php echo $items['qty']; ?>" maxlength="3" size="3" style="text-align: center"></td>
                           <td><?php echo $items['name'];?></td>
                           <td style="text-align: right">€<?php echo $this->cart->format_number($items['price']); ?></td>
                       </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

            <tr>
                <td></td>
                <td class="right"><strong>Total</strong></td>
                <td class="right" style="text-align: right">€<?php echo $this->cart->format_number($this->cart->total()); ?></td>
            </tr>
        </table>
        <br>
        <p><button class="btn btn-primary" type="submit">Update Cart</button>
            <a class="btn btn-primary" href="http://localhost:8888/gameStore/cart">Go To Cart</a></p>
    </form>
</div>
<!--     Categories       -->
<div class="card ">
    <div class="card-header card-header-dark">
        <h3 class="card-title">Categories</h3>
    </div>
    <ul class="list-group list-group-flush">
        <?php foreach (get_categories_h() as $category): ?>
            <li class="list-group-item"><a href="<?php echo base_url(); ?>products/category/<?php echo $category->id;?>"><?php echo $category->name; ?></a></li>
        <?php endforeach; ?>

    </ul>
</div>
<!--     Most Popular       -->
<div class="card">
    <div class="card-header ">
        <h3 class="card-title">Most Popular</h3>
    </div>
    <ul class="list-group list-group-flush">
        <?php foreach (get_popular_h() as $popular): ?>
            <li class="list-group-item"><a href="http://localhost:8888/gameStore/products/details/<?php echo $popular->id;?>"><?php echo $popular->title;?></a></li>
        <?php endforeach; ?>
    </ul>