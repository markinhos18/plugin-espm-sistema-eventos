<div class="row">
    <?php foreach ($eventos as $evento) : ?>
        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-4 col-lg-4 mb-3">

            <!-- <card-evento-imagem> -->
            <img style="height: 100px" class="card-img-top img-fluid" src="<?= $evento->eventosIdiomas[0]->bannerTopoArquivo ?>" alt="<?= $evento->titulo ?>" />
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
                    <div class="col-2 mb-3">
                        <a href="javascript:void(0)" onclick="share()" class="float-right">
                            <i aria-hidden="true" class="fas fa-share-alt"></i>
                        </a>
                    </div>
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
                    <?php if (isset($atividades)) : ?>
                        <div>
                            <span class="btn-red ">
                                <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i><?= $atividades->data[0]->eventosAtividadesEncontros[0]->modelo ?>
                            </span>
                        </div>
                    <?php endif; ?>

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