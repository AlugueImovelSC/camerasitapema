@extends('template.master.app')

@section('template')

    @include('template.header')

    <section class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <article class="carousel-item active">
                <div class="overlay">
                    <div class="carousel-caption">
                        <h1>Monitoramento Colaborativo</h1>
                        <p>Crie sua rede e compartilhe essa ideia.</p>
                        <a href="" class="btn btn-outline-light">Saiba Mais</a>
                    </div>
                </div>
                <img src="/assets/img/blank.gif" style="background-image: url('/assets/img/banner.jpg');">
            </article>
        </div>
    </section>

    <section class="container-fluid how-work" id="como-funciona">
        <div class="container">
            <div class="row">
                <header class="col-12">
                    <h1>Entenda melhor como funciona:</h1>
                </header>
                <div class="col-md-10 col-sm-12 ml-auto mr-auto">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/zw2PmQ-6Fd8" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container cameras-live mt-5 mb-5" id="cameras-ao-vivo">
        <div class="row">
            <header class="col-12 mt-3 mb-3">
                <h1>
                    Câmeras ao vivo
                </h1>
            </header>
            <div class="col-md-12 col-sm-12">
                <div class="cameras-live-items">
                    <div class="row">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://monitore.maaxcam.com.br/embed/37900/live/live/ponte-hercilio-luz?autoplay=true&amp;sound=true" class="embed-responsive-item" title="Ponte Hercílio Luz"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pl-2 pr-2">
                        <div class="row">
                            @for($i = 0; $i < 4; $i++)
                                <div class="col-md-3 col-sm-12 mt-2 mb-2 pl-1 pr-1">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://monitore.maaxcam.com.br/embed/37900/live/live/ponte-hercilio-luz?autoplay=true&amp;sound=true" class="embed-responsive-item" title="Ponte Hercílio Luz"></iframe>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container-fluid experiment" id="contato">
        <div class="container">
            <div class="row">
                <header class="col-12">
                    <h1>Experimente!</h1>
                    <p>Transmissão em tempo real.</p>
                </header>
                <div class="col-md-6 col-sm-12 experiment-contact">
                    <p>Preencha aqui os seus dados e acompanhe uma demonstração em tempo real de uma das câmeras da <b>Câmeras Itapema</b>.</p>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="" class="form-control" placeholder="Telefone" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="" class="form-control" placeholder="Bairro" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-outline-primary">
                                Quero Saber Mais
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="/assets/img/bg_experimente.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid network">
        <div class="container">
            <p>Redes Sociais</p>
            <a href="" class="icon-social icon-facebook"></a>
            <a href="" class="icon-social icon-twitter"></a>
            <a href="" class="icon-social icon-whatsapp"></a>
        </div>
    </div>

    @include('template.footer')

@endsection