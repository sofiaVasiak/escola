<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Técnico em Agronegócio</title>

    <!-- Incluindo o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Incluindo o CSS do Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- Estilos internos -->
    <style>
        section {
            padding: 40px 40px;
            background-color: #fff;
            margin: 20px auto;
            max-width: 1200px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* CSS para controlar a altura das imagens no carrossel */
        .carousel-item img {
            object-fit: cover;
            height: 300px;
            /* Ajuste o valor para a altura que desejar */
        }

        .MostrarPdf {
            width: 90%;
            height: 200px;
            border: none;
        }

        .card {
            margin: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .card-container {
            display: flex;
            gap: 70px;
            justify-content: center;
        }

        .alturaimg {
            height: 90px;
            width: 90px;
        }
    </style>
</head>

<body>
    <header>
        <?php include('apresentacao.php'); ?>
        <p id="inicio">CENTRO ESTADUAL DE EDUCAÇÃO PROFISSIONAL </p>
        <h1>Técnico em Agronegócio</h1>
    </header>

    <?php include('barra.php'); ?>

    <br>
    <!-- Carrossel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="agro.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="frente escola.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="arvore.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="agronegocio.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
        </div>
    </div>

    <section>
        <h3>PERFIL PROFISSIONAL:</h3>
        <p>
            O Técnico em Agronegócio é um profissional capacitado para gerir processos administrativos, financeiros e logísticos do setor agropecuário.
            Ele atua em todas as etapas da cadeia produtiva, desde a produção até a comercialização, com foco em otimização, inovação e sustentabilidade.
            Este profissional também se destaca na análise de mercado e gestão estratégica, contribuindo para o crescimento e a competitividade das empresas do agronegócio.
        </p>

        <h3>OBJETIVO DO CURSO:</h3>
        <p>
            O Curso Técnico em Agronegócio visa formar profissionais preparados para atuar nas diversas áreas do setor,
            como gestão de cadeias produtivas, marketing, finanças e logística, além de capacitar o aluno para ser empreendedor ou trabalhar em empresas do agronegócio,
            promovendo a sustentabilidade e a competitividade do setor.
        </p>

        <h3>CAMPO DE ATUAÇÃO:</h3>
        <p>
            O Técnico em Agronegócio pode atuar em empresas agrícolas e agroindustriais, cooperativas, comercialização de produtos agrícolas,
            gestão financeira, marketing e logística, além de atuar em consultorias ou órgãos governamentais relacionados ao agronegócio.
        </p>

        <h3>ATIVIDADES ACADÊMICAS:</h3>
        <p>
            O curso oferece atividades como exposições de trabalhos, participação em feiras e visitas técnicas a empresas do setor,
            além de palestras e workshops com profissionais da área.
        </p>

        <h3>ESTRUTURA:</h3>
        <p>
            O Centro Estadual de Educação Profissional Professora Naiana Babaresco possui uma infraestrutura moderna,
            com laboratórios de informática e Ciências Agrárias, auditório e biblioteca especializada, além de professores capacitados.
        </p>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="card-container">
                        <a href="matriz-agro.pdf" target="_blank">
                            <div class="card">
                                <div class="card-body text-center">
                                    <iframe src="matriz-agro.pdf" class="MostrarPdf" width="100%"></iframe>
                                    <button type="button" class="btn btn-dark">Matriz curricular</button>
                                </div>
                            </div>
                        </a>

                        <a href="Plano_de_Curso_Agroneg.pdf" target="_blank">
                            <div class="card">
                                <div class="card-body text-center">
                                    <iframe src="Plano_de_Curso_Agroneg.pdf" class="MostrarPdf"></iframe>
                                    <button type="button" class="btn btn-dark">Plano de curso</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h2 class="text-center">Laboratório e Estrutura</h2>
        <br>

        <div class="row">
            <div class="col-md-2">
                <a data-fancybox="imagem" href="agro.jpg">
                    <img class="img-fluid alturaimg" src="agro.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem" href="agro.jpg">
                    <img class="img-fluid alturaimg" src="agro.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem" href="agro.jpg">
                    <img class="img-fluid alturaimg" src="agro.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem" href="agro.jpg">
                    <img class="img-fluid alturaimg" src="agro.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem" href="agro.jpg">
                    <img class="img-fluid alturaimg" src="agro.jpg">
                </a>
            </div>

            <div class="col-md-2">
                <a data-fancybox="imagem" href="agro.jpg">
                    <img class="img-fluid alturaimg" src="agro.jpg">
                </a>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox='imagem']", {
            // Your custom options
        });
    </script>
</body>

</html>