<?php if ($this->session->flashdata('registered')): ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('registered'); ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('pass_login')): ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('pass_login') ?>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('fail_login')): ?>
    <div class="alert alert-danger ">
        <?php echo $this->session->flashdata('fail_login'); ?>
    </div>
<?php endif; ?>

<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-4 game">
            <div class="game-price">€<?php echo $product->price; ?></div>
            <a href="http://localhost:8888/gameStore/products/details/<?php echo $product->id; ?>"><img src="<?php echo base_url(); ?>assets/images/products/<?php echo $product->image; ?>" style="height: 251px"></a>

            <div class="game-title"><?php echo $product->title; ?></div>
            <div class="game-add">
                <form method="post" action="http://localhost:8888/gameStore/cart/add">
                    QTY: <input class="qty" type="text" name="qty" value="1">
                    <input type="hidden" name="item_number" value="<?php echo $product->id; ?>">
                    <input type="hidden" name="price" value="<?php echo $product->price; ?>">
                    <input type="hidden" name="title" value="<?php echo $product->title; ?>">
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>





