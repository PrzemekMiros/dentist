var new_scroll_position = 0;
var last_scroll_position;
var nav = document.getElementById("nav");

window.addEventListener('scroll', function(e) {
  last_scroll_position = window.scrollY;
  if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
    nav.classList.remove("slideDown");
    nav.classList.add("slideUp");
  } else if (new_scroll_position > last_scroll_position) {
    nav.classList.remove("slideUp");
    nav.classList.add("slideDown");
  }

  new_scroll_position = last_scroll_position;
});

