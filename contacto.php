<?php
  include_once("header.php");
  ?>
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contactenos</h2>
            <h3 class="section-subheading text-muted">Contacte con nosotros y atenderemos su consulta en la mayor brevedad posible.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
              <div class="row">
                  <p class="contact">
                    CodeSystem Soluciones. <br>
                    Ubicacion: Av. pirai #1200 <br>
                    Santa cruz - Bolivia <br>
                    Tel: +591 60098110 +591 76079622 <br>
                    Email: info@codesystem.tk <br>
                  </p>
              </div>
              <div class="row">
                    <div id="map"></div>
              </div>
              <script>
                function initMap() {
                  var uluru = {lat: -17.79586795, lng: -63.21015537};
                  var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: uluru
                  });
                  var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                  });
                }
              </script>
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsu_9nkyHZ5MPRVEMw_lnq86C1RdVULSU&callback=initMap">
              </script>              
          </div>
          <div class="col-md-6">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="form-group">
                <input class="form-control" id="name" type="text" placeholder="Su nombre *" required data-validation-required-message="Por favor introduzca su nombre.">
                <p class="help-block text-danger"></p>
              </div>

              <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Su correo electronico *" required data-validation-required-message="Por favor introduzca su correo electronico.">
                <p class="help-block text-danger"></p>
              </div>                

              <div class="form-group">
                <input class="form-control" id="phone" type="tel" placeholder="Su telefono *" required data-validation-required-message="Por favor introduzca su telefono.">
                <p class="help-block text-danger"></p>
              </div>                
              <div class="form-group">
                <textarea class="form-control" id="message" placeholder="Su mensaje *" required data-validation-required-message="Por favor introduzca su mensaje."></textarea>
                <p class="help-block text-danger"></p>
              </div>

              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">enviar Mensaje</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div id="disqus_thread"></div>
      <script>
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://codesystem.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </section>

<?php
  include_once("footer.php");
  ?>