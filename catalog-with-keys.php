<?php include 'my-functions.php';

$products = [
    "name" => "Chaise de Jardin",
    "price" => 12500,
    "weight" => 300,
    "discount" => 50,
    "picture_url" => "https://www.wadiga.com/28951-thickbox_default/fauteuil-de-jardin-en-plastique-gris-anthracite-55x60x81cm.jpg",
];

include 'header.php' ?>


<ul>
    <li>
        <h2> <?php echo $products['name'];
                ?>
        </h2>
        <p>
            <?php echo "Prix TTC : ", number_format(addTVA($products['price']), 2, ",", ''), "€";
            ?>
        </p>
        <p>
            <?php echo "Prix HT : ", number_format(priceExcludingVAT($products['price']), 2, ",", ''), "€";
            ?>
        </p>
        <p>
            <?php if ($products["discount"] !== null)
                echo "Promo de ", $products['discount'], "% : ", number_format(discountedPrice($products['price'], $products['discount']), 2, ",", ''), "€";
            ?>
        </p>
        <img src="<?php echo $products["picture_url"] ?>" alt="Image chaise jardin plastique noire">
    </li>
</ul>
<footer class="footer"> <?php include 'footer.php' ?>