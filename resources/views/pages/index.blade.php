@extends('layouts.main')
@section('content')
<main id="app">
  <div id="hero" class="portion">
    <h2 id="hero-text">GARDMIKAEL.NO</h2>
  </div>
  <section id="about" class="info overlay overlay-bg">
    <h3>Jeg <span
     class="txt-rotate"
     data-period="1000"
     data-rotate='[ "...", "heter Gard", "har hode for kode", "er kreativ", "vil lage hjemmesiden din" ]'></span></h3>
    <!-- <p class="thinner">I am a thirty year old freelance web developer from Trondheim, Norway. I like to create original, responsive & beautiful conent for the web. Need help transforming your idea into something real? </p> -->
    <p class="thinner">Jeg er en tredve år gammel freelance webutvikler fra Trondheim. Jeg liker å lage orginalt, stilrent og responsivt innhold for nett. Trenger du hjelp til ditt neste prosjekt?</p>
    <div class="button">
      <a href="#contact">Ta kontakt</a>
    </div>
  </section>

  <div id="code" class="portion two">
  </div>

  <section id="portion2" class="info inverted">
    <h3>Kode</h3>
    <p>Jeg har lang erfaring med utvikling, og kan kode i mange forskjellige språk. Jeg kan utvikle alt fra enkle nettsider, til mer avanserte systemer som intranett og nettportaler. </p>
    <div class="button">
      <a href="#">GitHub</a>
    </div>
  </section>

  <div class="portion three">
  </div>

  <div id="portfolio" name="portfolio" class="info inverted">
    <h3>Prosjekt</h3>

    <p class="thinner">Har du et prosjekt du ønsker hjelp med å ferdigstille? Trenger du noen som kan hjelpe deg gjøre ideer om til virkelighet?
      Jeg har lang erfaring med å designe og implemetere hjemmesider. Ettersom jeg jobber freelance kan jeg gjøre jobben kjappere, bedre og billigere enn hos de store selskapene. Ta kontakt og fortell meg om ditt prosjekt!</p>
    <div class="button">
      <a href="#">Mine prosjekt</a>
    </div>
  </div>

  <div id="contact" class="homepage-hero-module">
    <div class="video-container">
      <div class="filter">
        <div class="container">
          <form>
            <div class="text-center">
              <h2 class="mb-5"><strong>Ta kontakt</strong></h2>
            </div>
            <div class="md-form">
              <i class="fa fa-user prefix grey-text"></i>
              <input type="text" id="form3" class="form-control">
              <label for="form3">Ditt navn</label>
            </div>

            <div class="md-form">
              <i class="fa fa-envelope prefix grey-text"></i>
              <input type="text" id="form2" class="form-control">
              <label for="form2">Din epost</label>
            </div>
            <div class="md-form">
             <i class="fa fa-pencil prefix grey-text"></i>
             <textarea type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
             <label for="form8">Din melding</label>
            </div>

            <div class="text-center">
              <button class="btn btn-indigo">Send </button>
            </div>
          </form>
        </div>
      </div>
      <video autoplay loop class="fillWidth">
        <source src="{{asset('vid/Bed-Phone.mp4')}}" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
        <source src="{{asset('vid/Nature-Sunset.webm')}}" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
      </video>
      <div class="poster hidden">
        <img src="{{asset('vid/Nature-Sunset.jpg')}}" alt="">
      </div>
    </div>
  </div>

  <!-- Form subscription -->
  @include('partials._footer')
</main>
<script type="text/javascript">
  var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
    }

    setTimeout(function() {
      that.tick();
    }, delta);
  };

  window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
  };
</script>
@endsection
