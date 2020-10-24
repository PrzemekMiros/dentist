
<!------------------------------ FOOTER SECTION ---------------------------------->
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3-2">
                                <div class="footer_card hidden">
                                    <h3>
                                        Kontakt
                                    </h3>
                                    <hr class="line">
                                    <a href="mailto:" class="foot-mail">info@inzynierska2.pl</a><br>
                                    <a href="tel:+48 884 366 222" class="foot-phone">+48 884 366 222</a>
                                    <p>
                                    ul. Inżynierska 2<br>
                                    96-500 Sochaczew
                                    </p>
                                    <div class="media-wrap flex">
                                    <a href="https://www.facebook.com/inzynierska2/" class="media-icon" target="_blank">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="assets/img/svg/facebook.svg" class="img-fluid lazy" alt="" />
                                    </a>
                                    <a href="#" class="media-icon">
                                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="assets/img/svg/instagram.svg" class="img-fluid lazy" alt="" />
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3-2">
                                <div class="footer_card hidden">
                                    <h3>
                                        Godziny pracy
                                    </h3>
                                    <hr class="line">
                                    <div class="hours">
                                        <div class="flex space-between">
                                            <p>
                                                Poniedziałek
                                            </p>
                                            <p>
                                                16 - 20
                                            </p>
                                        </div>
                                        <div class="flex space-between">
                                            <p>
                                                Wtorek
                                            </p>
                                            <p>
                                                16 - 20
                                            </p>
                                        </div>
                                        <div class="flex space-between">
                                            <p>
                                                Środa
                                            </p>
                                            <p>
                                                16 - 20
                                            </p>
                                        </div>
                                        <div class="flex space-between">
                                            <p>
                                                Czwartek
                                            </p>
                                            <p>
                                                10 - 20
                                            </p>
                                        </div>
                                        <div class="flex space-between">
                                            <p>
                                                Piątek
                                            </p>
                                            <p>
                                                10 - 20
                                            </p>
                                        </div>  
                                    </div>
                                    <div class="card-wrap flex">
                                        <h4>
                                            Akceptujemy płatności kartą
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                               <div class="footer_card hidden">
                                    <h3>
                                        Napisz do nas
                                    </h3>
                                    <hr class="line">
                                    <form id="contact" action="send_form.php" method="post">
												<div class="row">
                                                    <div class="col-md-6">
                                                    <fieldset>
                                                        <input placeholder="Imie i nazwisko" name="name" type="name" tabindex="1" required />
                                                    </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <fieldset>
                                                        <input placeholder="Adres email" name="email" type="email" tabindex="2" required />
                                                    </fieldset>
                                                    </div>
                                                </div>                            																			
											<fieldset>
                                                <textarea placeholder="Treść wiadomości" name="message" tabindex="4" required></textarea>
                                            </fieldset>
					
											<fieldset>
										        
												<button class="btn effect04" name="submit" type="submit" id="contact-submit" data-submit="...wysyłanie">Wyślij</button><br />
                                                <div id="send_form_status"></div>
											</fieldset>
										</form>
                               </div>
                            </div>
                        </div>
                    </div>
                </footer>
<!------------------------------ POST FOOTER ---------------------------------->
                <section class="postfoot">
                    <div class="container">
                        <div class="row space-between">
                            <a href="https://www.agnieszkabielecka.pl/" class="hidden" target="_blank">
                                Foto www.agnieszkabielecka.pl
                            </a>
                            <a href="https://www.futurewebstudio.pl/" class="hidden" target="_blank">
                                Code www.futurewebstudio.pl
                            </a>
                        </div>
                    </div>
                </section>
        <script src="assets/js/easings.js"></script>
        <script src="assets/js/animation.js" async defer></script>
        <script src="assets/js/lazy.js" async defer></script>
        <script src="assets/js/main.js" async defer></script>
        <script src="assets/js/rellax.min.js"></script>
        <script>
            var rellax = new Rellax(".rellax", { horizontal: true });
        </script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

          <script>
    var swiper = new Swiper('.swiper-container-1', {
      slidesPerView: 1,
      spaceBetween: 30,
      preloadImages: true,
      lazyLoading: true,
      nextButton: ".swiper-button-next",
      prevButton: ".swiper-button-prev",
      loop: true,
      speed: 1200,
      autoplay:  {
    delay: 10000,
    disableOnInteraction: false
  },
  navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
    500: {
      slidesPerView: 1
    },
    700: {
      slidesPerView: 3
    }
  }
      
    });
  </script>
          <script>
    var swiper = new Swiper('.swiper-container-2', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      speed: 1200,
      nextButton: ".swiper-button-next",
      preloadImages: true,
      lazyLoading: true,
      autoplay: {
    delay: 10000,
    disableOnInteraction: false
  },
  navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
    500: {
      slidesPerView: 1
    },
    700: {
      slidesPerView: 2
    }
  }
      
    });
  </script>
         <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
          <script>
              $(document).ready(function () {
    $("html").on("submit", "#contact", function (e) {
        e.preventDefault();
        $("#send_form_status").html("").hide();
        var data = $("#contact").serialize();
        $.post("/send_form.php", data, function (res) {
            $("#send_form_status").html(res.msg).show();
            if (res.status == 1) {
                $("#contact")[0].reset();
            }
        });
    });
});
          </script>
    </body>
</html>