<?php include 'my-functions.php';

$products = [
    [
        "name" => "Chaise de Jardin",
        "price" => 12500,
        "weight" => 300,
        "discount" => null,
        "picture_url" => "https://www.wadiga.com/28951-thickbox_default/fauteuil-de-jardin-en-plastique-gris-anthracite-55x60x81cm.jpg",
    ],
    [
        "name" => "Chaise de Gaming",
        "price" => 10000,
        "weight" => 450,
        "discount" => null,
        "picture_url" => "https://m.media-amazon.com/images/I/412xdJMZVrL.jpg",
    ],
    [
        "name" => "Chaise de Bureau",
        "price" => 15000,
        "weight" => 400,
        "discount" => null,
        "picture_url" => "https://stefanodesign.fr/wp-content/uploads/2021/10/chaise-de-bureau-eames-ergonomique-confortable-dossier-haut-design-cuir-noir-replica-chaise-de-bureau-soft-pad-ea219-a-roulette2-.jpg"
    ],
];
?>



<?php include 'header.php' ?>


<ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <h2><?php echo $product['name'];
                ?>
            </h2>
            <p> Prix :<?php echo number_format(formatPrice($product['price']),2,',',''), '€';
                        ?>
            </p>
            <img src="<?php echo $product["picture_url"] ?>" alt="Image chaise jardin plastique noire">
        </li>

    <?php endforeach; ?>
</ul>
<?php include 'footer.php' ?>