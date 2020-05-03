<?php include __DIR__ . '/../layout/header.php';?>



<main class="container col-8">

    <p class="p">Cliquez sur un type pour voir tous les Pokémon de ce type</p>

    <div class="d-flex flex-wrap col">
        <?php foreach ($type as $currentType) : ?>
            <div class="types-item col" style="background-color: #<?= $currentType->color ?>">
                <a class="types-link types-name" href="<?= $baseURI ?>/type/<?= $currentType->id ?>"><?= $currentType->name ?></a>
            </div>
        <?php endforeach ?>
    </div>
</main>

<?php include __DIR__ . '/../layout/footer.php'; ?>
