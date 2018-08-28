var navbar = document.getElementById('navbar');

window.onscroll = function (){
  if(document.body.scrollTop > 100){
    navbar.classList.add('bg-light');
    navbar.classList.remove('p-4');
  }
  else{
    navbar.classList.remove('bg-light');
    navbar.classList.add('p-4');
  }

}
