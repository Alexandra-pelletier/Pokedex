<?php include __DIR__ . '/../layout/header.php';

?>



<main class="container col-10">

    <div class="row justify-content-center caps">
        <?php foreach ($pokemons as $currentPokemon) : ?>
            <div class="col-3 details"> <a class="pokemon-link" href="<?=$baseURI?>/pokemonDetail/<?= $currentPokemon->numero?>">
                    <img class="picture-size px-auto" src="<?=$baseURI?>/img/<?= $currentPokemon->numero ?>.png" alt="Image_Pokemon">
                    <div class="name"># <?= $currentPokemon->numero ?> <?= $currentPokemon->nom ?></div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</main>

<?php include __DIR__ . '/../layout/footer.php'; ?>
