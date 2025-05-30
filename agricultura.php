<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Técnico em Agricultura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<header>
    <?php include('apresentacao.php'); ?>
    <p id=inicio>CENTRO ESTADUAL DE EDUCAÇÃO PROFISSIONAL </p>
    <h1>Técnico em Agricultura</h1>
</header>
<?php include('barra.php'); ?>

<body>
    <br>
    <!-- Carrossel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="agricultura.jpg"
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
                    src="agronegocio.jpg"
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
    <h3>
        PERFIL PROFISSIONAL:
    </h3>
    <p>
        O Técnico em Agricultura é um profissional capacitado para atuar na produção, manejo e gerenciamento de atividades agrícolas. 
        Ele é responsável por implementar técnicas e tecnologias inovadoras no campo, promovendo o aumento da produtividade e a sustentabilidade das atividades rurais.
        Este profissional também se destaca no planejamento e na gestão da propriedade agrícola, contribuindo para a melhoria contínua dos processos produtivos e para a conservação dos recursos naturais.
    </p>
    <h3>
        OBJETIVO DO CURSO:
    </h3>
    <p>
        O Curso Técnico em Agricultura tem como objetivo formar profissionais aptos a atuar nas diferentes etapas da produção agrícola,
        desde o planejamento até a comercialização dos produtos. O curso capacita o aluno em áreas como manejo de cultivos, controle de pragas, 
        utilização de insumos e tecnologias agrícolas, além de promover a conscientização sobre a importância da sustentabilidade e da preservação ambiental no setor agrícola.
    </p>
    <h3>
        CAMPO DE ATUAÇÃO:
    </h3>
    <p>
        O Técnico em Agricultura pode atuar em propriedades rurais, cooperativas agrícolas, empresas de insumos agrícolas, agroindústrias e órgãos públicos ligados ao setor agrícola. 
        Ele também pode atuar como consultor ou gestor de projetos agrícolas, contribuindo para o aumento da produtividade e eficiência no campo.
    </p>
    <h3>
        ATIVIDADES ACADÊMICAS:
    </h3>
    <p>
        O curso oferece atividades como visitas técnicas a propriedades agrícolas e empresas do setor, participação em feiras e eventos especializados, além de aulas práticas sobre cultivo,
        manejo e técnicas agrícolas. O aluno também é incentivado a desenvolver projetos e realizar pesquisas na área.
    </p>
    <h3>
        ESTRUTURA:
    </h3>
    <p>
        O Centro Estadual de Educação Profissional Professora Naiana Babaresco oferece uma infraestrutura moderna, com laboratórios de Ciências Agrárias, salas de aula equipadas, 
        além de áreas externas para a realização de atividades práticas no campo. A escola também conta com professores especializados e com vasta experiência no setor agrícola.
    </p>

            <div class="container mt-5">

                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">

                        <div class="card-container">
                            <a href="matriz-agro.pdf" target="_blank">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <iframe src="matriz-agricultura.pdf" class="MostrarPdf" width="100%"></iframe>
                                        <button type="button" class="btn btn-dark">Matriz curricular</button>

                                    </div>
                                </div>
                            </a>

                            <a href="Plano_de_Curso_Agroneg.pdf" target="_blank">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <iframe src="Plano-agri.pdf" class="MostrarPdf"></iframe>
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