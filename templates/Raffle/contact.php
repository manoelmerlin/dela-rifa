<head>
    <link rel="stylesheet" href="./css/contact.css">
</head>
<body>
    <div id="header"></div>
    <div class="container">
        <div><br>
            <h1 id="tittle">Dúvidas?</h1>
        </div>
        <div class="text">
            <p>Dúvidas gerais ou caso queira ser um dos nossos parceiros disponibilizamos um retorno de 15% do valor do
                seu
                produto. Entre em contato com a gente e o suporte responderá em 24 horas. Obrigado :)</p><br>
        </div>
        <div id="modal">
            <form [formGroup]="form">
                <div class="form-group required">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" formControlName="email"
                        placeholder="Digite seu email">
                </div>
                <div class="form-group required">
                    <label for="subject">Assunto: </label>
                    <input type="text" class="form-control" id="subject" formControlName="subject"
                        placeholder="Digite o assunto">
                </div>
                <div class="form-group required">
                    <label for="message">Mensagem:</label>
                    <textarea class="form-control" id="message" formControlName="message" rows="3"></textarea>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" (click)="sendEmail()">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div><br>
            <h1 id="tittle">Nossa Startup</h1>
        </div>
        <div class="text">
            <p>Venha conhecer nossa startup localizada no centro de São Paulo, local aberto à visitantes que são
                cadastrados na plataforma. Disponizibilamos café, conforto e um chá de ideias. :)</p><br>
        </div>
        <div id="modal">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4103.107867642468!2d-46.658561729545454!3d-23.55981638763227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cd060ea13b%3A0x7c535e9d9784e6c2!2sAv.%20Paulista%2C%202000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-200!5e0!3m2!1spt-BR!2sbr!4v1586949580155!5m2!1spt-BR!2sbr"
                width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div><br>
    </div>
    <?php require './templates/layouts/footer.php'; ?>
</body>
