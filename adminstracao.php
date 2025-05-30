<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Técnico em Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<header>
    <?php include('apresentacao.php'); ?>
    <p id=inicio>CENTRO ESTADUAL DE EDUCAÇÃO PROFISSIONAL </p>
    <h1>Técnico em Administração</h1>
</header>
<?php include('barra.php'); ?>

<body>
    <br>
    <!-- Carrossel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="imgadm.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="frente escola.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="arvore.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="biblioteca.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
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
        </style>


        <section>
        <section>
    <h3>
        PERFIL PROFISSIONAL:
    </h3>
    <p>
        O Técnico em Administração é um profissional preparado para atuar na gestão de processos administrativos, financeiros e operacionais em empresas de diversos segmentos.
        Ele desenvolve habilidades para organizar, planejar, coordenar e controlar as atividades empresariais, visando à melhoria dos resultados organizacionais. Este profissional também se destaca na comunicação, 
        liderança e tomada de decisões estratégicas, contribuindo para a eficiência e o crescimento das empresas.
    </p>
    <h3>
        OBJETIVO DO CURSO:
    </h3>
    <p>
        O Curso Técnico em Administração tem como objetivo formar profissionais capacitados para atuar na gestão e operação de empresas, desenvolvendo competências em áreas como administração de pessoal,
         marketing, finanças, logística e recursos humanos. O curso também visa preparar o aluno para ser empreendedor ou exercer funções de liderança em organizações, com foco na otimização de processos e na sustentabilidade dos negócios.
    </p>
    <h3>
        CAMPO DE ATUAÇÃO:
    </h3>
    <p>
        O Técnico em Administração pode atuar em empresas de diferentes setores, como comércio, indústria, serviços e organizações públicas. 
        Ele pode exercer funções em departamentos administrativos, financeiros, recursos humanos, marketing e logística, além de atuar em consultorias ou até mesmo abrir seu próprio negócio.
    </p>
    <h3>
        ATIVIDADES ACADÊMICAS:
    </h3>
    <p>
        O curso oferece atividades práticas como simulações empresariais, estudos de caso, participação em feiras de negócios e visitas técnicas a empresas.
        Além disso, o aluno tem a oportunidade de participar de palestras e workshops com profissionais da área, complementando sua formação teórica com vivências do mercado.
    </p>
    <h3>
        ESTRUTURA:
    </h3>
    <p>
        O Centro Estadual de Educação Profissional Professora Naiana Babaresco possui uma infraestrutura moderna, com laboratórios de informática, 
        auditório, biblioteca especializada e salas de aula equipadas, além de professores qualificados e com experiência prática na área administrativa.
    </p>
</section>


            <div class="container mt-5">

                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">

                        <div class="card-container">
                            <a href="matriz-agro.pdf" target="_blank">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <iframe src="matriz-adm.pdf" class="MostrarPdf" width="100%"></iframe>
                                        <button type="button" class="btn btn-dark">Matriz curricular</button>

                                    </div>
                                </div>
                            </a>

                            <a href="Plano_de_Curso_Agroneg.pdf" target="_blank">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <iframe src="Plano_de_Curso_Administra.pdf" class="MostrarPdf"></iframe>
                                        <button type="button" class="btn btn-dark">Plano de curso</button>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
        </section>

        <?php include('footer.php'); ?>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>