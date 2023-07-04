<?php $id = $_GET['id'];
include('oeuvres.php');
$element = $oeuvres[$id]; // récuperation de l'élément à la position de l'id du tableau

if (!is_array($element)) {
    header('Location: http://localhost:3000/index.php');
}
?>
<!doctype html>
<html lang="fr">

<body>

    <?php include('header.php'); ?>

    <main>
        <article id="detail-oeuvre">

            <div id="img-oeuvre">
                <img src=<?php echo $element['image']['src']; ?> alt="<?php echo $element['image']['alt']; ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $element['titre']; ?></h1>
                <p class="description"><?php echo $element['description']; ?></p>
                <p class="description-complete">
                    <?php echo $element['description_complete']; ?>
                </p>
            </div>

        </article>
    </main>
    <?php include('footer.php'); ?>

</body>

</html>