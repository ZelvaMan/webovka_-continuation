
function funkce_burger(x) {
    x.classList.toggle("change");
    const hamburger=document.getElementsByClassName('burger');
    const nav_odkazy=document.getElementById('odkazy');
    const odkaz=document.getElementsByClassName('btn');
    let i;
    {
      nav_odkazy.classList.toggle('show');
      for(i=0;i<6;i++)
      {
        odkaz[i].classList.toggle('show');
      }
    }
  }
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

