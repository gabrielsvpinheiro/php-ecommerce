<?php require 'includes/head.php' ?>
<?php require 'includes/top-nav.php' ?>
<?php require 'includes/header.php' ?>

<main>
    <div>
        <h2 class="text-3xl leading-6 font-bold text-gray-900">Products</h2>
        <ul>
            <?php foreach($products as $product): ?>
                <li>
                    <a href="/product?id=<?= $product['id'] ?>">
                        <?= $product['name'] ?> - R$<?= $product['price'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
    </div>
</main>

<?php require 'includes/footer.php' ?>
