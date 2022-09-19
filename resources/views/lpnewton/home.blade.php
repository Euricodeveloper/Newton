<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Newton</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="preload" href="{{asset('fonts/Canaro-Light.otf')}}" as="font" type="font/ttf" crossorigin="anonymous"/>  
    <link rel="preload" href="{{asset('fonts/Canaro-SemiBold.otf')}}" as="font" type="font/otf" crossorigin="anonymous"/>
    <link rel="preload" href="{{asset('fonts/Segoe-UI-Regular.ttf')}}" as="font" type="font/ttf" crossorigin="anonymous"/>
    <link rel="preload" href="{{asset('fonts/Segoe-UI-Bold.ttf')}}" as="font" type="font/ttf" crossorigin="anonymous"/>
    <link rel="preload" href="{{asset('fonts/Efra-Regular.ttf')}}" as="font" type="font/ttf" crossorigin="anonymous"/>
    <link rel="preload" href="{{asset('images/background-featured.png')}}" as="image" crossorigin="anonymous"/>
</head>
<body>
<header class="container">
      <div>
        <ul>
          <li><a href="#quem-somos">Quem somos</a></li>
          <li><a href="#nossa-equipe">Equipe</a></li>
          <li><a href="#nosso-espaco">Espaço</a></li>
          <li><a href="#fale-conosco">Contato</a></li>
        </ul>
        <div>
          <img src="./assets/svg/Icon-feather-search.svg" alt="pesquisar" class="search"/>
        </div>
      </div>
    </header>
    <main>
      <section class="featured-section" href="{{asset('images\background-featured.png')}}">
        <div>
          <h1>Lorem ipsum dolor sit amet</h1>
          <p>Lorem ipsum dolor sit amet</p>

          <div class="slide">
            <button class="active"></button>
            <button></button>
            <button></button>
          </div>
        </div>
      </section>

      <section id="quem-somos" class="container">
        <img src="assets/images/girl.png" alt="" />
        <div>
          <h2 class="title-effect">Quem somos</h2>

          <h3 class="title">Lorem ipsum dolor sit amet.</h3>

          <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus
            bibendum scelerisque. Duis ornare et risus id faucibus. Fusce
            tincidunt leo elit. Suspendisse potenti. Nunc vestibulum dolor et
            risus viverra mattis. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec a ex quis sapien laoreet eleifend.
          </p>

          <a class="button" href="#"> Saiba mais </a>
        </div>
      </section>

      <section id="nossa-equipe" class="container">
        <div>
          <h2 class="title-effect">Nossa equipe</h2>

          <h3 class="title">Lorem ipsum dolor sit amet.</h3>

          <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis luctus
            bibendum scelerisque. Duis ornare et risus id faucibus. Fusce
            tincidunt leo elit. Suspendisse potenti. Nunc vestibulum dolor et
            risus viverra mattis. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Donec a ex quis sapien laoreet eleifend.
          </p>
        </div>
        <img src="assets/images/nossa-equipe.png" alt="" />
      </section>

      <section id="nosso-espaco">
        <img class="bg-effect" src="/assets/images/beauty_thing.png" alt="" />
        <div class="content">
          <div class="container">
            <div>
              <h2 class="title-effect">Nosso espaço</h2>

              <h3 class="title">Lorem ipsum dolor sit amet.</h3>

              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                luctus bibendum scelerisque. Duis ornare et risus id faucibus.
                Fusce tincidunt leo elit. Suspendisse potenti. Nunc vestibulum
                dolor et risus viverra mattis. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Donec a ex quis sapien laoreet
                eleifend.
              </p>
            </div>
            <div class="our-place-images">
              <div class="scroll-options">
                <button><img src="/assets/svg/arrow.svg" alt="" /></button>
                <button><img src="/assets/svg/arrow.svg" alt="" /></button>
              </div>
              <img src="assets/images/place.png" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section id="fale-conosco" class="container">
        <h2 class="title">Fale conosco</h2>
        <p class="text">
          Quer conversar com a Health Clinic? Basta preencher o formulário
          abaixo e nós entraremos em contato assim que possível!
        </p>
        <div class="links">
          <button>
            <img src="/assets/images/phone.png" alt="" />
            <span>Telefone</span>
          </button>

          <button>
            <img src="/assets/images/whatsapp.png" alt="" />
            <span>WhatsApp</span>
          </button>

          <button>
            <img src="/assets/images/wechat.png" alt="" />
            <span>Wechat</span>
          </button>
        </div>

        <form id="form-submit" action="{{route('form.submit')}}" method="post">
          @csrf
          <div class="content">
            <div>
              <input placeholder="Nome" name="name" id="name" type="text" />
              <input placeholder="E-mail" name="email" id="email"  type="email" />
              <select name="subject" id="subject">
                <option value="" disabled selected>Assunto</option>
                <option value="Saúde">Saúde</option>
                <option value="Medicamento">Medicamento</option>
                <option value="Outros">Outros</option>
              </select>
            </div>
            <textarea name="message" id="message" placeholder="Mensagem"></textarea>
          </div>
          <button class="button">Enviar</button>
        </form>
      </section>
    </main>

    <footer>
      <div class="container">
        <div class="items">
          <div class="div-empty"></div>
          <ul>
            <li><a href="#quem-somos">Quem somos</a></li>
            <li><a href="#nossa-equipe">Equipe</a></li>
            <li><a href="#nosso-espaco">Espaço</a></li>
            <li><a href="#fale-conosco">Contato</a></li>
          </ul>
          <div class="social-medias">
            <a href="#" target="_blank" rel="noopener noreferrer">
              <img
                src="./assets/images/linkedin.png"
                alt="pesquisar"
                class="linkedin"
              />
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
              <img
                src="./assets/images/facebook.png"
                alt="pesquisar"
                class="facebook"
              />
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
              <img
                src="./assets/images/instagram.png"
                alt="pesquisar"
                class="instagram"
              />
            </a>
          </div>
        </div>
        <hr />
        <div class="copyright">
          <p>Health Clinic São Paulo -Todos os Direitos Reservados.</p>
        </div>
      </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>