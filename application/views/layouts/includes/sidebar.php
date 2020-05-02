<div class="cart-block">
    <form action="cart/update" method="post">
        <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
            <tr>
                <th>QTY</th>
                <th>Item Desctiption</th>
                <th style="text-align: right">Item Price</th>
            </tr>
            <tr>
                <td></td>
                <td class="right"><strong>Total</strong></td>
                <td class="right" style="text-align: right">€</td>
            </tr>
        </table>
        <br>
        <p><button class="btn btn-primary" type="submit">Update Cart</button>
            <a class="btn btn-primary" href="cart">Go To Cart</a></p>
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