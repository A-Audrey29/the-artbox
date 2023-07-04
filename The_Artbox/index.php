<!doctype html>
<html lang="fr">

<body>

    <?php include('header.php'); ?>

    <main>
        <div id="liste-oeuvres">
            <?php include('oeuvres.php');
            $id = 0; // compteur du tableau
            foreach ($oeuvres as $element) :
            ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $id; ?>">

                        <img src=" <?php echo $element['image']['src']; ?>" alt="<?php echo $element['image']['alt']; ?>" />

                        <h2><?php echo $element['titre']; ?></h2>

                        <p class="description"><?php echo $element['description']; ?></p>
                    </a>
                </article>
            <?php $id++;
            endforeach; ?>

        </div>
    </main>

    <?php include('footer.php'); ?>

</body>

</html>