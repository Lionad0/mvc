 // HOME PAGE
 const about = document.querySelector('.about');
 const aboutSection = document.getElementById('about');
 about.addEventListener('click', function(e){
     e.preventDefault();
     aboutSection.scrollIntoView();
 })

 const menu = document.querySelector('.menu');
 const menuSection = document.getElementById('menu');
 menu.addEventListener('click', function(e){
     e.preventDefault();
     menuSection.scrollIntoView();
 })


