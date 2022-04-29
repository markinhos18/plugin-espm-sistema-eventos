<div id="espm-eventos" class="espm-eventos">

    <div class="row mb-4">
        <img class="img-fluid" style="height: 400px" src="https://sitedev.espm.br/wp-content/uploads/site_bg_nw_0000_Layer-29-min-min.jpg" alt="<?= $evento->titulo ?>">
    </div>


    <div class="row">
        <div class=" col-xxl-7 col-lg-7">

            <!-- <atividades-evento> -->
            <div class="mb-3 text-publico">



                <span class="btn-red ">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>Online
                </span>




                <?php if (isset($atividades) && $atividades->data[0]->investimento != null) : ?>
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i><span class="btn-red me-3"><?= $atividades->data[0]->investimento ?></span>
                <?php else : ?>
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i><span class="btn-grey me-4">Gratuito</span>
                <?php endif; ?>

                <!-- AddToAny BEGIN -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_email"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END -->

                <!-- <botao-compartilhar> -->

                <!-- <a href="javascript:void(0)" onclick="share()" class="me-4">
                    <i aria-hidden="true" class="fas fa-share-alt"></i>
                </a> -->

                <!-- </botao-compartilhar> -->

            </div>
            <!-- </atividades-evento> -->

            <!-- <titulo-evento> -->
            <h2><b>VIRADA DIGITAL ESPM</b></h2>
            <!-- </titulo-evento> -->


            <!-- <publico-evento> -->

            <div class="my-2">
                <span class="text-publico">
                    <strong>Público:</strong>

                    <!-- <?php
                            $categoria = ESPM_Requests::getPublicoPorId($evento->eventosPublicos[0]->publicoId);
                            ?>

                    <span><?= $categoria->data->descricao ?></span> -->

                    <span>
                        Estudantes do Ensino Médio, Estudantes Cursinhos
                    </span>



                </span>
            </div>

            <!-- </publico-evento> -->

            <div class="">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>



        </div>
        <div class="col-xxl-5 col-lg-5">
            <div class="card-body">
                <div class="mb-2">
                    <i aria-hidden="true" class="far fa-calendar-alt  red me-2"></i> 27 OUT até 28 OUT de 2022
                </div>


                <div class="btn-red mb-2">
                    <i aria-hidden="true" class="icone icone-location red me-2"></i>Online
                </div>



                <div class="btn-red mb-3">
                    <i aria-hidden="true" class="fas fa-dollar-sign red me-2"></i><span class="btn-grey me-4">Gratuito</span>
                </div>

                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Inscrições</button>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas, nibh et lacinia luctus, tortor nisi fermentum sapien, quis cursus dolor arcu vitae turpis. Nunc aliquet aliquam tellus non dignissim. Proin pretium eget orci a porta. Duis dictum ex velit, ac tempus libero mollis non. Maecenas pharetra risus id orci sagittis dictum. Curabitur at consequat ante. Etiam vel scelerisque tellus, ut fringilla enim. Vivamus facilisis congue ligula, id ornare ipsum posuere eget. Fusce ipsum mauris, finibus non diam sed, vulputate finibus odio.
        </p>
    </div>



    <div class="row mt-5">

        <h5 class="mb-3">PROGRAMAÇÃO COMPLETA:</h5>

        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-3 col-lg-3 mb-3">


            <!-- <card-evento-conteudo> -->
            <div class="card-body">



                <!-- <publico-evento> -->

                <div class="my-2">
                    <span class="text-publico">
                        <b>Marketplace: Atransformação Digital do Varejo de E-Commerce Pós COVID-19</b>

                    </span>
                </div>

                <!-- </publico-evento> -->





                <!-- <evento-hora-inscricao> -->
                <div class="text-publico">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>27/11 | SEXTA-FEIRA
                </div>
                <!-- </evento-hora-inscricao> -->


                <!-- <evento-hora-inscricao> -->
                <div class="text-publico mb-3">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2 "></i>14H ÀS 16H
                </div>
                <!-- </evento-hora-inscricao> -->


                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Saiba mais</button>
            </div>
            <!-- </card-evento-conteudo> -->
        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-3 col-lg-3 mb-3">


            <!-- <card-evento-conteudo> -->
            <div class="card-body">



                <!-- <publico-evento> -->

                <div class="my-2">
                    <span class="text-publico">
                        <b>Marketplace: Atransformação Digital do Varejo de E-Commerce Pós COVID-19</b>

                    </span>
                </div>

                <!-- </publico-evento> -->





                <!-- <evento-hora-inscricao> -->
                <div class="text-publico">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>27/11 | SEXTA-FEIRA
                </div>
                <!-- </evento-hora-inscricao> -->


                <!-- <evento-hora-inscricao> -->
                <div class="text-publico mb-3">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2 "></i>14H ÀS 16H
                </div>
                <!-- </evento-hora-inscricao> -->


                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Saiba mais</button>
            </div>
            <!-- </card-evento-conteudo> -->
        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-3 col-lg-3 mb-3">


            <!-- <card-evento-conteudo> -->
            <div class="card-body">



                <!-- <publico-evento> -->

                <div class="my-2">
                    <span class="text-publico">
                        <b>Marketplace: Atransformação Digital do Varejo de E-Commerce Pós COVID-19</b>

                    </span>
                </div>

                <!-- </publico-evento> -->





                <!-- <evento-hora-inscricao> -->
                <div class="text-publico">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>27/11 | SEXTA-FEIRA
                </div>
                <!-- </evento-hora-inscricao> -->


                <!-- <evento-hora-inscricao> -->
                <div class="text-publico mb-3">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2 "></i>14H ÀS 16H
                </div>
                <!-- </evento-hora-inscricao> -->


                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Saiba mais</button>
            </div>
            <!-- </card-evento-conteudo> -->
        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-3 col-lg-3 mb-3">


            <!-- <card-evento-conteudo> -->
            <div class="card-body">



                <!-- <publico-evento> -->

                <div class="my-2">
                    <span class="text-publico">
                        <b>Marketplace: Atransformação Digital do Varejo de E-Commerce Pós COVID-19</b>

                    </span>
                </div>

                <!-- </publico-evento> -->





                <!-- <evento-hora-inscricao> -->
                <div class="text-publico">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>27/11 | SEXTA-FEIRA
                </div>
                <!-- </evento-hora-inscricao> -->


                <!-- <evento-hora-inscricao> -->
                <div class="text-publico mb-3">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2 "></i>14H ÀS 16H
                </div>
                <!-- </evento-hora-inscricao> -->


                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Saiba mais</button>
            </div>
            <!-- </card-evento-conteudo> -->
        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-3 col-lg-3 mb-3">


            <!-- <card-evento-conteudo> -->
            <div class="card-body">



                <!-- <publico-evento> -->

                <div class="my-2">
                    <span class="text-publico">
                        <b>Marketplace: Atransformação Digital do Varejo de E-Commerce Pós COVID-19</b>

                    </span>
                </div>

                <!-- </publico-evento> -->





                <!-- <evento-hora-inscricao> -->
                <div class="text-publico">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>27/11 | SEXTA-FEIRA
                </div>
                <!-- </evento-hora-inscricao> -->


                <!-- <evento-hora-inscricao> -->
                <div class="text-publico mb-3">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2 "></i>14H ÀS 16H
                </div>
                <!-- </evento-hora-inscricao> -->


                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Saiba mais</button>
            </div>
            <!-- </card-evento-conteudo> -->
        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-3 col-lg-3 mb-3">


            <!-- <card-evento-conteudo> -->
            <div class="card-body">



                <!-- <publico-evento> -->

                <div class="my-2">
                    <span class="text-publico">
                        <b>Marketplace: Atransformação Digital do Varejo de E-Commerce Pós COVID-19</b>

                    </span>
                </div>

                <!-- </publico-evento> -->





                <!-- <evento-hora-inscricao> -->
                <div class="text-publico">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>27/11 | SEXTA-FEIRA
                </div>
                <!-- </evento-hora-inscricao> -->


                <!-- <evento-hora-inscricao> -->
                <div class="text-publico mb-3">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2 "></i>14H ÀS 16H
                </div>
                <!-- </evento-hora-inscricao> -->


                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Saiba mais</button>
            </div>
            <!-- </card-evento-conteudo> -->
        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-3 col-lg-3 mb-3">


            <!-- <card-evento-conteudo> -->
            <div class="card-body">



                <!-- <publico-evento> -->

                <div class="my-2">
                    <span class="text-publico">
                        <b>Marketplace: Atransformação Digital do Varejo de E-Commerce Pós COVID-19</b>

                    </span>
                </div>

                <!-- </publico-evento> -->





                <!-- <evento-hora-inscricao> -->
                <div class="text-publico">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>27/11 | SEXTA-FEIRA
                </div>
                <!-- </evento-hora-inscricao> -->


                <!-- <evento-hora-inscricao> -->
                <div class="text-publico mb-3">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2 "></i>14H ÀS 16H
                </div>
                <!-- </evento-hora-inscricao> -->


                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Saiba mais</button>
            </div>
            <!-- </card-evento-conteudo> -->
        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div class=" card-eventos col-xxl-3 col-lg-3 mb-3">


            <!-- <card-evento-conteudo> -->
            <div class="card-body">



                <!-- <publico-evento> -->

                <div class="my-2">
                    <span class="text-publico">
                        <b>Marketplace: Atransformação Digital do Varejo de E-Commerce Pós COVID-19</b>

                    </span>
                </div>

                <!-- </publico-evento> -->





                <!-- <evento-hora-inscricao> -->
                <div class="text-publico">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2"></i>27/11 | SEXTA-FEIRA
                </div>
                <!-- </evento-hora-inscricao> -->


                <!-- <evento-hora-inscricao> -->
                <div class="text-publico mb-3">
                    <i aria-hidden="true" class="fas fa-chevron-right red me-2 "></i>14H ÀS 16H
                </div>
                <!-- </evento-hora-inscricao> -->


                <button class="btn-eventos-evento" href="<?= $evento->url ?>">Saiba mais</button>
            </div>
            <!-- </card-evento-conteudo> -->
        </div>
        <!-- </card-evento> -->

    </div>

    <div class="row mt-5">

        <h5 class="mb-3">PALESTRANTE(S):</h5>

        <!-- <card-evento> -->
        <div style="height: 332px;" class=" card-eventos col-xxl-3 col-lg-3 mb-3">

            <!-- <card-evento-imagem> -->
            <img class="card-img-top img-fluid" src="/wp-content/plugins/espmeventos/assets/img/bill_gates.jpg" alt="<?= $evento->titulo ?>" />
            <!-- </card-evento-imagem> -->

            <!-- <card-evento-conteudo> -->
            <div class="text-card">

                <!-- <publico-evento> -->

                <div class="text-publico text-center">
                    <b>BILL GATES</b><br>
                    <span>
                        FUNDADOR DA MICROSOFT, DIRETOR EXECUTIVO R FILANTROPO
                    </span>

                </div>


                <!-- </publico-evento> -->

            </div>
            <!-- </card-evento-conteudo> -->

        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div style="height: 332px;" class=" card-eventos col-xxl-3 col-lg-3 mb-3">

            <!-- <card-evento-imagem> -->
            <img class="card-img-top img-fluid" src="/wp-content/plugins/espmeventos/assets/img/bill_gates.jpg" alt="<?= $evento->titulo ?>" />
            <!-- </card-evento-imagem> -->

            <!-- <card-evento-conteudo> -->
            <div class="text-card">

                <!-- <publico-evento> -->

                <div class="text-publico text-center">
                    <b>BILL GATES</b><br>
                    <span>
                        FUNDADOR DA MICROSOFT, DIRETOR EXECUTIVO R FILANTROPO
                    </span>

                </div>


                <!-- </publico-evento> -->

            </div>
            <!-- </card-evento-conteudo> -->

        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div style="height: 332px;" class=" card-eventos col-xxl-3 col-lg-3 mb-3">

            <!-- <card-evento-imagem> -->
            <img class="card-img-top img-fluid" src="/wp-content/plugins/espmeventos/assets/img/bill_gates.jpg" alt="<?= $evento->titulo ?>" />
            <!-- </card-evento-imagem> -->

            <!-- <card-evento-conteudo> -->
            <div class="text-card">

                <!-- <publico-evento> -->

                <div class="text-publico text-center">
                    <b>BILL GATES</b><br>
                    <span>
                        FUNDADOR DA MICROSOFT, DIRETOR EXECUTIVO R FILANTROPO
                    </span>

                </div>


                <!-- </publico-evento> -->

            </div>
            <!-- </card-evento-conteudo> -->

        </div>
        <!-- </card-evento> -->
        <!-- <card-evento> -->
        <div style="height: 332px;" class=" card-eventos col-xxl-3 col-lg-3 mb-3">

            <!-- <card-evento-imagem> -->
            <img class="card-img-top img-fluid" src="/wp-content/plugins/espmeventos/assets/img/bill_gates.jpg" alt="<?= $evento->titulo ?>" />
            <!-- </card-evento-imagem> -->

            <!-- <card-evento-conteudo> -->
            <div class="text-card">

                <!-- <publico-evento> -->

                <div class="text-publico text-center">
                    <b>BILL GATES</b><br>
                    <span>
                        FUNDADOR DA MICROSOFT, DIRETOR EXECUTIVO R FILANTROPO
                    </span>

                </div>


                <!-- </publico-evento> -->

            </div>
            <!-- </card-evento-conteudo> -->

        </div>
        <!-- </card-evento> -->



    </div>


    <div class="row mt-5">

        <h5 class="mb-3">PARCEIRO(S):</h5>

        <!-- <card-evento> -->
        <div style="height: 332px;" class=" card-eventos col-xxl-3 col-lg-3 mb-3">

            <!-- <card-evento-imagem> -->
            <!-- <img class="card-img-top img-fluid" src="/wp-content/plugins/espmeventos/assets/img/logo.png" alt="<?= $evento->titulo ?>" /> -->
            <img class="card-img-top img-fluid" src="/wp-content/plugins/espmeventos/assets/img/bill_gates.jpg" alt="<?= $evento->titulo ?>" />
            <!-- </card-evento-imagem> -->

            <!-- <card-evento-conteudo> -->
            <div class="text-card">

                <!-- <publico-evento> -->

                <div class="text-publico text-center">

                    <span>
                        ESCOLA SUPERIOR DE PROPAGANDA E MARKETING
                    </span>

                </div>


                <!-- </publico-evento> -->

            </div>
            <!-- </card-evento-conteudo> -->

        </div>
        <!-- </card-evento> -->


    </div>
    <div class="row mt-5">

        <h5 class="mb-3">ORGANIZADORES(ES):</h5>

        <!-- <card-evento> -->
        <div style="height: 332px;" class=" card-eventos col-xxl-3 col-lg-3 mb-3">

            <!-- <card-evento-imagem> -->
            <!-- <img class="card-img-top img-fluid" src="/wp-content/plugins/espmeventos/assets/img/logo.png" alt="<?= $evento->titulo ?>" /> -->
            <img class="card-img-top img-fluid" src="/wp-content/plugins/espmeventos/assets/img/bill_gates.jpg" alt="<?= $evento->titulo ?>" />
            <!-- </card-evento-imagem> -->

            <!-- <card-evento-conteudo> -->
            <div class="text-card">

                <!-- <publico-evento> -->

                <div class="text-publico text-center">

                    <span>
                        ESCOLA SUPERIOR DE PROPAGANDA E MARKETING
                    </span>

                </div>


                <!-- </publico-evento> -->

            </div>
            <!-- </card-evento-conteudo> -->

        </div>
        <!-- </card-evento> -->


    </div>

    <div class="row mt-5">
        <p>ESPAÇO PARA TEXTO LIVRE, CONFORME NECESSIDADE / EXCESSÕES DO EVENTO</p>
    </div>


    <div class="row mt-5">
        <h5 class="mb-3">COMO CHEGAR:</h5>

        <div class="col-xxl-6 col-lg-6">
            <p>
                Campus Rio de Janeiro<br>
                Rua: Rosário, número 90 - Bairro: Centro<br>
                Rio de Janeiro / Brasil
            </p>

            <div class="mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2973448484936!2d-43.1773081!3d-22.902400999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5ed9ae3c6f%3A0x66e14c514d81f679!2sR.%20do%20Ros%C3%A1rio%2C%2090%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020041-002!5e0!3m2!1spt-BR!2sbr!4v1651072580108!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-xxl-6 col-lg-6">
            <p>
                Campus Rio de Janeiro<br>
                Rua: Rosário, número 90 - Bairro: Centro<br>
                Rio de Janeiro / Brasil
            </p>

            <div class="mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2973448484936!2d-43.1773081!3d-22.902400999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5ed9ae3c6f%3A0x66e14c514d81f679!2sR.%20do%20Ros%C3%A1rio%2C%2090%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020041-002!5e0!3m2!1spt-BR!2sbr!4v1651072580108!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


    </div>


</div>