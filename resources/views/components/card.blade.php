<div class="product">
    <div class="product_image"><img src="/images/product_1.jpg" alt=""></div>
    <div class="product_content">
        <div class="product_title"><a href={{ route('products.show', ['product' => $id]) }}>{{ $name }}</a></div>
        <div class="product_price">${{ $price }}</div>
    </div>
</div>