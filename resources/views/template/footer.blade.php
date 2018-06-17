<footer class="container-fluid footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h1>Sobre Nós</h1>
                <p>{!! nl2br(setting()->site_about_us) !!}</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <h1>Nossos Contatos</h1>
                <p><i class="icon-mail"></i> {{ setting()->contact_email }}</p>
                <p><i class="icon-phone" style="color: orange;"></i> {{ setting()->contact_phone }}</p>
                <p><i class="icon-whatsapp" style="color: #00e676;"></i> {{ setting()->contact_whatsapp }}</p>
            </div>
            <div class="col-md-4 col-sm-12">
                <h1>Endereço</h1>
                <p><i class="icon-location"></i> Rua 624, Nº 364, Tabuleiro, Itapema - SC</p>
            </div>
        </div>
    </div>
</footer>

<div class="container mt-3 mb-3 text-center copyright">
    <p>Desenvolvido por <a href="https://www.agenciaitapema.com.br">Agência Itapema</a></p>
</div>

<a href="https://api.whatsapp.com/send?phone=55{{ str_replace(['(', ')', ' ', '-'], null, setting()->contact_whatsapp) }}" class="icon-whatsapp-bottom round" target="_blank">
    <img src="/assets/img/icon-whatsapp.png">
</a>