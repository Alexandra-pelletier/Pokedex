<?php include __DIR__ . '/../layout/header.php';

?>


<main class="container col-10 main-detail">

    <div class="div-row">
        <h1 class="text-center my-3">Détails de <?= $pokemonData->nom ?></h1>
        <div class="row justify-content-around col-10" id="div-detail">
            <div class="col mx-3">
                <img class="rounded d-block img" src="<?=$baseURI?>/img/<?= $pokemonData->numero ?>.png" alt="">
            </div>
            <div class="col bloc-detail">
                <div class="mb-3">
                    <h3># <?= $pokemonData->numero . ' ' . $pokemonData->nom ?></h3>
                </div>
                <div class="d-flex">
                    <?php foreach ($pokemonData->types as $currentPokemonData) : ?>
                        <div class="pokemon-types-item" style="background-color: #<?= $currentPokemonData->color?>">
                            <a class="pokemon-link type-name" href="<?= $baseURI ?>/type/<?= $currentPokemonData->id ?>"><?= $currentPokemonData->name ?></a>
                        </div>
                    <?php endforeach ?>
                </div>
                <h4 class="my-3">Statistiques</h4>
                <div class="container-fluid">
                    <div class="row my-1">
                        <div class="col-3 pl-0">PV</div>
                        <div class="col-2"><?= $pokemonData->pv ?></div>
                        <div class="progress col-7 p-0">
                            <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemonData->pv ?>*100%/255);" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container-fluid">
                        <div class="row my-1">
                            <div class="col-3 pl-0">Attaque</div>
                            <div class="col-2"><?= $pokemonData->attaque ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemonData->attaque ?>*100%/255);" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container-fluid">
                        <div class="row my-1">
                            <div class="col-3 pl-0">Défense</div>
                            <div class="col-2"><?= $pokemonData->defense ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemonData->defense ?>*100%/255);" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container-fluid">
                        <div class="row my-1">
                            <div class="col-3 pl-0">Attaque Spé.</div>
                            <div class="col-2"><?= $pokemonData->attaque_spe ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemonData->attaque_spe ?>*100%/255);" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container-fluid">
                        <div class="row my-1">
                            <div class="col-3 pl-0">Défense Spé.</div>
                            <div class="col-2"><?= $pokemonData->defense_spe ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemonData->defense_spe ?>*100%/255);" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container-fluid">
                        <div class="row my-1">
                            <div class="col-3 pl-0">Vitesse</div>
                            <div class="col-2"><?= $pokemonData->vitesse ?></div>
                            <div class="progress col-7 p-0">
                                <div class="progress-bar" role="progressbar" style="width: calc(<?= $pokemonData->vitesse ?>*100%/255);" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center my-3 "> <a class="pokemon-link return " href="../">Revenir à la liste</a></p>
</main>

<?php include __DIR__ . '/../layout/footer.php'; ?>
