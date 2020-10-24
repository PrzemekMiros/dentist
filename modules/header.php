<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <meta name="robots" content="no-index" />
        <meta name="author" content="Future Web Studio" />
        <meta name="keywords" content="dentysta sochaczew, stomatolog sochaczew, klinika stomatologiczna sochaczew"/>
        <meta name="description" content="Misją naszej kliniki w Sochaczewie jest najwyższa jakość leczenia i obsługi pacjenta.Oferujemy kompleksowe usługi z zakresu stomatologii, chirurgii stomatologicznej i implantologii. Dentysta Sochaczew" />
        <meta property="og:type" content="website"/>
        <meta property="og:image" content=""/>
        <meta property="og:site_name" content="Klinika Stomatologiczna Sochaczew"/>
        <meta property="og:url" content=""/>
        <meta property="og:title" content="Klinika Stomatologiczna Sochaczew"/>
        <meta property="og:description" content="Misją naszej kliniki w Sochaczewie jest najwyższa jakość leczenia i obsługi pacjenta.Oferujemy kompleksowe usługi z zakresu stomatologii, chirurgii stomatologicznej i implantologii. Dentysta Sochaczew"/>
        <meta name="twitter:card" content="summary"/>
        <meta property="twitter:image" content=""/>
        <meta property="twitter:title" content="Klinika Stomatologiczna Sochaczew" />
        <meta property="twitter:description" content="Misją naszej kliniki w Sochaczewie jest najwyższa jakość leczenia i obsługi pacjenta.Oferujemy kompleksowe usługi z zakresu stomatologii, chirurgii stomatologicznej i implantologii. Dentysta Sochaczew" />
        <link rel="icon" type="image/png" href="assets/img/logo/icon.png"/>
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        
    <script>
            document.documentElement.className = "js";
    </script>
</head>
<body>
<nav id="nav">
        <div class="container">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
              <span class="burger-line"></span>
            </label>
            <a href="/?page=main" class="logo-link">
            <label class="logo">Inżynierska 22</label>
            </a>
            <ul>
              <li><a class="active" href="/?page=main">Główna</a></li>
              <li><a href="/?page=o-nas">O nas</a></li>
              <li><a href="/?page=oferta">Oferta</a></li>
              <li><a href="/?page=metamorfozy">Metamorfozy</a></li>
              <li><a href="/?page=praca">Praca</a></li>
              <li><a href="/?page=kontakt">Kontakt</a></li>
              <li class="inline">
              <svg class="mobnone" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)" filter="url(#filter0_d)">
<path d="M23.5918 15.0743L20.7812 12.2079C19.7774 11.1842 18.0709 11.5937 17.6694 12.9245C17.3683 13.8459 16.3645 14.3577 15.4611 14.1529C13.4535 13.6411 10.7433 10.9794 10.2414 8.82959C9.94024 7.9082 10.5425 6.88448 11.4459 6.57741C12.7508 6.16792 13.1524 4.42759 12.1486 3.40387L9.33797 0.537454C8.53494 -0.179151 7.33039 -0.179151 6.62774 0.537454L4.72054 2.48252C2.81335 4.52997 4.9213 9.95569 9.63911 14.7672C14.3569 19.5787 19.677 21.8309 21.6846 19.7834L23.5918 17.8383C24.2945 17.0194 24.2945 15.7909 23.5918 15.0743Z" fill="#2BD900"/>
</g>
<defs>
<filter id="filter0_d" x="0" y="0" width="28.1401" height="28.54" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
<feOffset dy="4"/>
<feGaussianBlur stdDeviation="2"/>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
</filter>
<clipPath id="clip0">
<rect width="20.1401" height="20.54" fill="white" transform="translate(4)"/>
</clipPath>
</defs>
</svg>

              <a href="tel:+48 884 366 222" title="Zadzwoń">+48 884 366 222</a></li>
            </ul>
        </div>
    </nav>
 
<a class="top-link hide" href="" id="js-top">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 6"><path d="M12 6H0l6-6z"/></svg>
  <span class="screen-reader-text">Back to top</span>
</a>
<script>
const scrollToTopButton = document.getElementById('js-top');
const scrollFunc = () => {

  let y = window.scrollY;
  
  if (y > 300) {
    scrollToTopButton.className = "top-link show";
  } else {
    scrollToTopButton.className = "top-link hide";
  }
};

window.addEventListener("scroll", scrollFunc);

const scrollToTop = () => {
  // Let's set a variable for the number of pixels we are from the top of the document.
  const c = document.documentElement.scrollTop || document.body.scrollTop;
  
  // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
  // We'll also animate that scroll with requestAnimationFrame:
  // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
  if (c > 0) {
    window.requestAnimationFrame(scrollToTop);
    // ScrollTo takes an x and a y coordinate.
    // Increase the '10' value to get a smoother/slower scroll!
    window.scrollTo(0, c - c / 5);
  }
};

// When the button is clicked, run our ScrolltoTop function above!
scrollToTopButton.onclick = function(e) {
  e.preventDefault();
  scrollToTop();
}
</script>
    <main>