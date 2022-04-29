<div id="espm-eventos" class="espm-eventos">
    <div class="row">
        <!-- <filtros> -->
        <div class="col-xxl-3 col-lg-3 col-md-6 p-0 gap-3 mb-3">
            <div class="row bg-sidebar py-4 mx-2">
                <div>
                    <form id="filtros" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="post">
                        <h3 class="title-white">Encontre o evento ideal para você</h3>

                        <!-- <campus> -->
                        <?php if (isset($campus)) : ?>
                            <div class="col-12 mb-2 checkbox-widgets">
                                <?php foreach ($campus as $valor) : ?>
                                    <div class="form-check">
                                        <input class="form-check-input inputCampus espm-filtro" name="campusIds[]" type="checkbox" value="<?= $valor->campus ?>" <?= isChecked('campusIds', $valor->campus) ?>>
                                        <label class="form-check-label" type="checkbox" for="inputCampus">
                                            <?= $valor->descr ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <!-- </campus> -->

                        <!-- <publico> -->
                        <?php if (isset($publico)) : ?>
                            <div class="col-12 my-2">
                                <label class="title-white d-block" for="publicosIds">Público</label>
                                <select class="form-select espm-filtro" name="publicosIds" id="publicosIds">
                                    <option value="">Selecione</option>
                                    <?php foreach ($publico->data as $valor) : ?>
                                        <option value="<?= $valor->id ?>" <?= isSelected('publicosIds', $valor->id) ?>><?= formatLable($valor->descricao) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <?php endif; ?>
                        <!-- </publico> -->

                        <!-- <modelo> -->
                        <div class="col-12 my-2">
                            <label class="title-white d-block" for="modelo">Modelo</label>
                            <select class="form-select espm-filtro" name="modelo" id="modelo">
                                <option value="">Selecione</option>
                                <?php foreach ($modelos as $id => $descricao) : ?>
                                    <option value="<?= $id ?>" <?= isSelected('modelo', $id) ?>><?= $descricao ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- </modelo> -->

                        <!-- <investimento> -->
                        <div class="col-12 my-2">
                            <label class="title-white d-block" for="investimento">Investimento</label>
                            <select class="form-select espm-filtro" name="investimento" id="investimento">
                                <option value="">Selecione</option>
                                <?php foreach ($investimentos as $id => $descricao) : ?>
                                    <option value="<?= $id ?>" <?= isSelected('investimento', $id) ?>><?= $descricao ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- </investimento> -->

                        <!-- <data> -->
                        <div class="col-12 my-2">
                            <div class="title-white mb-2">
                                <i aria-hidden="true" class="far fa-calendar-alt me-2"></i>
                                <span><b>Data do evento</b></span>
                            </div>

                            <div>
                                <input class="form-control" name="data" type="date" value="<?= $_POST['data'] ?>">
                            </div>
                        </div>
                        <!-- </data> -->

                        <input type="hidden" name="ordem" id="ordem" value="asc">

                        <input type="hidden" name="action" value="resultados">

                        <div class="row d-flex justify-content-center mt-3">
                            <button type="submit" value="Submit" id="btn-filtros" class="jet-date-range__submit apply-filters__button btn-green">
                                <i class="fa fa-calendar-o me-2"></i> <span class=" jet-date-range__submit-text">Encontrar</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- </filtros> -->

        <!-- <resultados> -->
        <div class=" col-xxl-9 col-lg-9 col-md-6">
            <div>
                <!-- <banner-destaque> -->
                <?php if (isset($bannerDestaque)) : ?>
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($bannerDestaque->data as $banner) : ?>
                                <div class="carousel-item">
                                    <img style="height: 300px" class="card-img-top img-fluid" src="<?= $banner->bannerDestaqueArquivo ?>" alt="<?= $banner->paginaEventoTitulo ?>">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color:white;"><?= $banner->paginaEventoTitulo ?></h5>
                                        <p><?= $banner->paginaEventoSubTitulo ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- </banner-destaque> -->

                <?php if (isset($eventos)) : ?>
                    <!-- <ordenacao> -->
                    <div class="col-12 mb-4">
                        <select class="form-select espm-ordenar-eventos">
                            <option selected>Ordenar por ...</option>
                            <option value="asc">Titulo A - Z</option>
                            <option value="desc">Titulo Z - A</option>
                        </select>
                    </div>
                    <!-- </ordenacao> -->

                    <div id="resultados">
                        <div class="row">
                            <?php foreach ($eventos->data as $evento) : ?>
                                <!-- <card-evento> -->
                                <div class=" card-eventos col-xxl-4 col-lg-4 mb-3">

                                    <!-- <card-evento-imagem> -->
                                    <div class="img-cards">
                                        <img class="card-img-top img-fluid" src="<?= $evento->eventosIdiomas[0]->bannerTopoArquivo ?>" alt="<?= $evento->titulo ?>" />
                                    </div>
                                    <!-- </card-evento-imagem> -->

                                    <!-- <card-evento-conteudo> -->
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- <link-pagina-evento> -->
                                            <?php if (isset($evento->eventosIdiomas->paginaEventoData)) : ?>
                                                <div class="col-10 mb-3">
                                                    <span class="red"><?= $evento->eventosIdiomas->paginaEventoData ?></span>
                                                </div>
                                            <?php endif; ?>
                                            <!-- </link-pagina-evento> -->

                                            <!-- <botao-compartilhar> -->
                                            <!-- <div class="col-2 mb-3">
                                                <a href="javascript:void(0)" onclick="share()" class="float-right">
                                                    <i aria-hidden="true" class="fas fa-share-alt"></i>
                                                </a>
                                            </div> -->
                                            <!-- </botao-compartilhar> -->
                                        </div>

                                        <!-- <titulo-evento> -->
                                        <h2><?= $evento->titulo ?></h2>
                                        <!-- </titulo-evento> -->

                                        <!-- <publico-evento> -->
                                        <?php if (isset($evento->eventosPublicos[0])) : ?>
                                            <div class="my-2">
                                                <span class="text-publico">
                                                    <strong>Público:</strong>

                                                    <?php
                                                    $categoria = ESPM_Requests::getPublicoPorId($evento->eventosPublicos[0]->publicoId);
                                                    ?>
                                                    <span><?= $categoria->data->descricao ?></span>

                                                </span>
                                            </div>
                                        <?php endif; ?>
                                        <!-- </publico-evento> -->

                                        <!-- <evento-hora-inscricao> -->
                                        <div class="text-publico">
                                            <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i><?= $evento->inscricaoHoraInicial ?> até <?= $evento->inscricaoHoraFinal ?>
                                        </div>
                                        <!-- </evento-hora-inscricao> -->

                                        <!-- <atividades-evento> -->
                                        <div class="mb-3 text-publico">
                                            <div>

                                                <?php if (isset($evento)) : ?>

                                                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i><span class="btn-red "><?= $evento->eventosAtividades[0]->eventosAtividadesEncontros[0]->modelo  ?></span>

                                                <?php endif; ?>


                                            </div>

                                            <div>
                                                <?php if (isset($atividades) && $atividades->data[0]->investimento != null) : ?>
                                                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i><span class="btn-grey"><?= $atividades->data[0]->investimento ?></span>
                                                <?php else : ?>
                                                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i><span class="btn-grey">Gratuito</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <!-- </atividades-evento> -->

                                        <button class="btn-eventos me-3" href="<?= $evento->url ?>">Inscrições</button>
                                        <button class="btn-eventos" href="<?= $evento->url ?>">Saiba mais</button>
                                    </div>
                                    <!-- </card-evento-conteudo> -->
                                </div>
                                <!-- </card-evento> -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else : ?>
                    Sem resultados
                <?php endif; ?>
            </div>
        </div>
        <!-- </resultados> -->
    </div>
</div>