<head>
    <link rel="stylesheet" href="./css/partnership.css">
</head>
<?php if ($_GET['modulo'] != 'Dashboard'): ?>
    <?php require './templates/layouts/header.php'; ?>
<?php endif; ?>
<body>
    <div id="header"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img class="card-img-top"
                        src='https://lagesgardenshopping.com.br/wp-content/uploads/2016/05/0d222d04-e60e-44e1-9e73-652b6315b253.png'
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Americanas</h5>
                        <p class="card-text">A maior rede de vendas do país</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top"
                        src='https://www.sunoresearch.com.br/wp-content/uploads/2019/09/amazon.png'
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Amazon</h5>
                        <p class="card-text">A maior rede de vendas de vendas do mundo</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top"
                        src='https://iguatemi.com.br/patiohigienopolis/sites/patiohigienopolis/files/2018-04/Centauro%20s.png'
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Centauro</h5>
                        <p class="card-text">A maior rede de esportivos do país</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top"
                        src='https://www.melhordocinema.com.br/media/image_bank/2017/12/the-games.jpg.800x0_q85_crop.jpg'
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">The games</h5>
                        <p class="card-text">A maior rede de games do país</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img class="card-img-top"
                        src='https://codigovalido.com.br/wp-content/uploads/2019/02/cupom-pichau.jpg'
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pichau</h5>
                        <p class="card-text">A maior rede de venda de periféricos do país</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <h2 id="tittle">Como funciona?</h2>
        </div>

        <div class="text">
            <p>Os nossos parceiros têm um benefício financeiro que é retornado em cima do valor original do produto. É
                destinado
                a <b>empresas, microempresas, ou pessoas que vendem produtos legais, mas possuem CNPJ em seu nome</b>.
                Os produtos devem
                ser
                novos e com garantia, e que caso houver algum problema com o produto o mesmo possa se responsabilizar.
            </p>
            <p>A Dela Rifa tem por objetivo fornecer o meio de contato e venda e nos responsabilizamos pela entrega do
                produto.
                O
                benefício
                para parceiros é de 15% a mais no valor do seu produto e o retorno será pago quando a rifa for
                sorteada.</p>
            <br>
        </div>
        <div>
            <h2 id="tittle">Como ser Parceiro?</h2>
        </div>
        <div class="text">
            <p>Caso deseja ser um de nossos parceiros em nossa aba de<a routerLink='/contact'> contato </a>só preencher
                as
                informações que o nosso suporte irá avaliar e entrar em contato.</p><br>
        </div>

        <h2 id="tittle">Casos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Empresa</th>
                    <th scope="col">Produtos rifados</th>
                    <th scope="col">Valor dos produtos</th>
                    <th scope="col">Faturamento (15%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Americanas</th>
                    <td>32</td>
                    <td>R$ 40.500</td>
                    <td>R$ 6.075</td>
                </tr>
                <tr>
                    <th scope="row">Amazon</th>
                    <td>15</td>
                    <td>R$ 12.000</td>
                    <td>R$ 1.800</td>
                </tr>
                <tr>
                    <th scope="row">Pichau</th>
                    <td>7</td>
                    <td>R$ 21.000</td>
                    <td>R$ 3.150</td>
                </tr>
                <tr>
                    <th scope="row">Centauro</th>
                    <td>9</td>
                    <td>R$ 2.700</td>
                    <td>R$ 405</td>
                </tr>
                <tr>
                    <th scope="row">The Games</th>
                    <td>21</td>
                    <td>R$ 4.200</td>
                    <td>R$ 630</td>
                </tr>
                <tr>
                    <th scope="row">Extra</th>
                    <td>3</td>
                    <td>R$ 1.200</td>
                    <td>R$ 180</td>
                </tr>
            </tbody>
        </table>
        <br>
    </div>
    <?php require './templates/layouts/footer.php'; ?>
</body>