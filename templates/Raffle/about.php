<!DOCTYPE html>

<html>

<head>
    <title>Dela Rifa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/about.css">
</head>

<style>
    .social-icons a {
        display: inline-block;
        height: 3.5rem;
        width: 3.5rem;
        background-color: #495057;
        color: #fff !important;
        border-radius: 50%;
        text-align: center;
        font-size: 1.5rem;
        line-height: 3.5rem;
        margin-right: 1rem;
    }

    .social-icons a:last-child {
        margin-right: 0;
    }

    .social-icons a:hover {
        background-color: #BD5D38;
    }
</style>
<?php if ($_GET['modulo'] != 'Dashboard'): ?>
    <?php require './templates/layouts/header.php'; ?>
<?php endif; ?>
<body>
    <div id="header"></div>
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered p-5" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Modal title</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 id="cv-profession"></h4>
                    <h5 class="my-2 text-bold">Tecnologias</h6>
                        <ul class="tech-list">
                        </ul>
                        <div class="social-icons text-center"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container"><br>
        <div>
            <h2 id="title">Quem somos?</h2>
            <p>A Dela Rifa é uma startup que surgiu em um brainstorm na faculdade onde um grupo de 4 amigos tiveram a
                ideia
                de transformar a sorte das pessoas em algo real e barato. Cada rifa possui um limite de participantes, e
                quando atingido o máximo, as rifas são sorteadas pela Loteria Federal. </p>
        </div>
        <div><br>
            <h2 id="title">Como posso comprar uma rifa?</h2>
            <p>As nossas rifas têm um valor máximo de 10 reais, variando de acordo com o produto sorteado, para comprar
                a sua, entre na nossa aba de <a routerLink='/raffles'>rifas</a>, escolha as desejadas, mas para concluir
                a compra, é necessário
                ser cadastrado na plataforma.</p>
        </div>
        <div><br>
            <h2 id="title">Como sei que ganhei?</h2>
            <p>
                Quando houver o sorteio e o número for gerado, será chegado em seu e-mail de cadastro um aviso
                de que ganhou a rifa e o prazo para entrega em sua casa.
            </p>
        </div>
        <h2 class="text-center"> Fundadores </h2>
        <hr>
        <div class="row">
            <div class="col-sm text-center hover">
                <img src="https://user-images.githubusercontent.com/40414119/79511193-2adcbf80-8015-11ea-9a6e-80f9eb05af34.jpg"
                    class="rounded-circle" alt="Cinque Terre">
                <p><strong>Danilo Ferrai</strong></p>
                <button id="cv-danilo" class="btn btn-secondary">Currículo <i class="far fa-file-alt"></i></button>
            </div>
            <div class="col-sm text-center hover">
                <img src="https://user-images.githubusercontent.com/40414119/76591262-98ee0e00-64ce-11ea-96a3-4d0860172afd.jpeg"
                    class="rounded-circle" alt="Cinque Terre">
                <p><strong>Lucas Oliveira</strong></p>
                <button id="cv-lucas" class="btn btn-secondary">Currículo <i class="far fa-file-alt"></i></button>
            </div>
            <div class="col-sm text-center hover">
                <img src="https://user-images.githubusercontent.com/40414119/76591396-01d58600-64cf-11ea-9773-b855b73a96e2.jpeg"
                    class="rounded-circle" alt="Cinque Terre">
                <p><strong>Manoel Merlin</strong></p>
                <button id="cv-manoel" class="btn btn-secondary">Currículo <i class="far fa-file-alt"></i></button>
            </div>
            <div class="col-sm text-center hover">
                <img src="https://user-images.githubusercontent.com/40414119/79506346-2c55ba00-800c-11ea-8906-acf6afb85f62.png"
                    class="rounded-circle" alt="Cinque Terre">
                <p><strong>Kim Kokubun</strong></p>
                <button id="cv-kim" class="btn btn-secondary">Currículo <i class="far fa-file-alt"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <br>
                <h2> Missão </h2>

                <p>A Dela Rifa está comprometida a levar a melhor experiência de sorte aos nossos clientes através de
                    sua
                    plataforma, proporcionando conforto e confiabilidade.</p>
            </div>
            <div class="col">
                <br>
                <h2> Visão </h2>

                <p>Ser uma empresa reconhecida por sua excelência em sorteios.</p>
            </div>
            <div class="col">
                <br>
                <h2> Valores </h2>
                <p>Equilíbrio
                    <br>
                    Transparência
                    <br>
                    Segurança</ul>
            </div>
        </div>
    </div>
    <?php require './templates/layouts/footer.php'; ?>
</body>

</html>

<script>
    $(document).ready(function () {
        const cvManoel = $('#cv-manoel');
        const cvDanilo = $('#cv-danilo');
        const cvLucas = $('#cv-lucas');
        const cvKim = $('#cv-kim');
        const techList = $('.tech-list')
        const socialLinks = $('.social-icons');
        let modalManoel = false;
        let modalDanilo = false;
        let modalLucas = false;
        let modalKim = false;

        const modal = $('.modal');

        const cvManoelData = {
            name: "Manoel Merlin",
            age: 20,
            course: "Sistema da informação",
            profession: "Desenvolvedor web",
            gitHub: 'https://github.com/manoelmerlin',
            linkedin: 'https://www.linkedin.com/in/manoel-merlin-neto-596904184/',
            tecnologies: ['PHP', 'Angular', 'MySql', 'jquery']
        };

        const cvLucasData = {
            name: "Lucas Oliveira",
            age: 19,
            course: "Sistema da informação",
            profession: "Desenvolvedor Fullstack",
            gitHub: 'https://github.com/DevLucasOliveira',
            linkedin: 'https://www.linkedin.com/in/lucas-oliveira-91a27716a',
            tecnologies: ['C#', '.NET Core', 'Angular', 'SQL Server']
        };

        const cvDaniloData = {
            name: "Danilo Ferrari",
            age: 19,
            course: "Sitema da informação",
            profession: "Desenvolvedor Fullstack",
            gitHub: 'https://www.github.com/DevDaniloFerrari',
            linkedin: 'https://www.linkedin.com/in/danilo-ferrari-5830a4161',
            tecnologies: ['C#', 'NET Core', 'Angular', 'Azure', 'AWS', 'SqlServer']
        };

        const cvKimData = {
            name: "Kim Kokubun",
            age: '26',
            course: "Sistema da informação",
            profession: "Desenvolvedor FullStack ",
            gitHub: 'https://github.com/kimkokubun',
            linkedin: 'https://www.linkedin.com/in/kim-silveira-882296161/',
            tecnologies: ['Java', 'Angular', 'PostgreSQL', 'NodeJs', 'ReactJS', 'AWS', 'Oracle']
        };

        cvManoel.on('click', function () {
            modalManoel = true;
            modal.modal('show');
        });

        cvDanilo.on('click', function () {
            modalDanilo = true;
            modal.modal('show');
        });

        cvLucas.on('click', function () {
            modalLucas = true;
            modal.modal('show');
        });

        cvKim.on('click', function () {
            modalKim = true;
            modal.modal('show');
        });


        modal.on('shown.bs.modal', function () {
            const modalHeader = $('#exampleModalLongTitle');
            const cvProfession = $('#cv-profession');

            if (modalManoel) {
                $.each(cvManoelData.tecnologies, function (key, value) {
                    techList.append(
                        `<li style="list-style-type:circle;" class="p-2">${value}</li>`
                    );
                });

                modalHeader.text(`CV - ${cvManoelData.name}`);
                cvProfession.text(cvManoelData.profession);

                socialLinks.append(
                    `<a href="${cvManoelData.linkedin}"><i class="fab fa-linkedin-in"></i></a>
                    <a href="${cvManoelData.gitHub}"><i class="fab fa-github"></i></a>`
                );

                modalManoel = false
            }

            if (modalDanilo) {
                $.each(cvDaniloData.tecnologies, function (key, value) {
                    techList.append(
                        `<li style="list-style-type:circle;" class="p-2">${value}</li>`
                    );
                });

                modalHeader.text(`CV - ${cvDaniloData.name}`);
                cvProfession.text(cvDaniloData.profession);

                socialLinks.append(
                    `<a href="${cvDaniloData.linkedin}"><i class="fab fa-linkedin-in"></i></a>
                    <a href="${cvDaniloData.gitHub}"><i class="fab fa-github"></i></a>`
                );
                modalDanilo = false
            }

            if (modalLucas) {
                $.each(cvLucasData.tecnologies, function (key, value) {
                    techList.append(
                        `<li style="list-style-type:circle;" class="p-2">${value}</li>`
                    );
                });

                modalHeader.text(`CV - ${cvLucasData.name}`);
                cvProfession.text(cvLucasData.profession);

                socialLinks.append(
                    `<a href="${cvLucasData.linkedin}"><i class="fab fa-linkedin-in"></i></a>
                    <a href="${cvLucasData.gitHub}"><i class="fab fa-github"></i></a>`
                );
                modalLucas = false
            }

            if (modalKim) {
                $.each(cvKimData.tecnologies, function (key, value) {
                    techList.append(
                        `<li style="list-style-type:circle;" class="p-2">${value}</li>`
                    );
                });

                modalHeader.text(`CV - ${cvKimData.name}`);
                cvProfession.text(cvKimData.profession);

                socialLinks.append(
                    `<a href="${cvKimData.linkedin}"><i class="fab fa-linkedin-in"></i></a>
                    <a href="${cvKimData.gitHub}"><i class="fab fa-github"></i></a>`
                );
                modalKim = false
            }
        });

        modal.on('hidden.bs.modal', function () {
            techList.html('');
            socialLinks.html('');
        })
    });
</script>