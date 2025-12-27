<div class="card product-card position-relative d-flex align-items-center">
    <img src="<?php echo isset($product_image_url)?$product_image_url:"assets/images/product-1.png"; ?>"
        class="card-img-top" alt="...">
    <div class="card-body text-center">
        <h5 class="card-title"><?php echo isset($product_name)?$product_name:"Cappuccino"; ?></h5>
        <p class="card-text m-1"><?php echo isset($product_description)?$product_description:"Coffee 50% | Milk 50%"; ?>
        </p>
        <p class="card-text product-price mb-4">
            <?php echo isset($product_price)?$product_price:"$8.50";
            ?></p>
    </div>
    <button class=" btn btn-primary primary-button product-card-btn rounded-5 border-0 text-black px-4 py-2">Order
        Now</button>
</div>