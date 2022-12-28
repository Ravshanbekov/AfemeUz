/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

 "use strict";

 const themeLight = document.querySelector('#theme_light'),
     themeDark = document.querySelector('#theme_dark'),
     colors = document.querySelectorAll('#theme_color');

 for (let i = 0; i < colors.length; i++) {
     colors[i].addEventListener('click', function(){
         setCookie('color', this.getAttribute('title'));
     });
 }

 if (checkCookie('theme')) {
     if (getCookie('theme') == 'light') {
         setTimeout(() => {
             themeLight.click();
         }, 100);
     } else if (getCookie('theme') == 'dark') {
         setTimeout(() => {
             themeDark.click();
         }, 100);
     }
 }
 if (checkCookie('color')) {
     for (let i = 0; i < colors.length; i++) {
         console.log(colors[i].getAttribute('title'), getCookie('color'));
         if (getCookie('color' == colors[i].getAttribute('title'))) {
             setTimeout(() => {
                 colors[i].querySelector('div').click();
             }, 100);
             console.log('dfssdfsd');
         }
     }
 }

 themeLight.addEventListener('click', function(){
     setCookie('theme', 'light');
 });
 themeDark.addEventListener('click', function(){
     setCookie('theme', 'dark');
 });

 function getCookie(cName) {
     let name = cName + '=';
     let decodedCookie = decodeURIComponent(document.cookie);
     let ca = decodedCookie.split(';');
     for (let i = 0; i < ca.length; i++) {
         let c = ca[i];
         while (c.charAt(0) == ' ') {
             c = c.substring(1);
         }
         if (c.indexOf(name) == 0) {
             return c.substring(name.length, c.length);
         }
     }
 }
 function checkCookie(name) {
     let cName = getCookie(name);
     if (cName != '' && cName != undefined) {
         return true;
     } else{
         return false;
     }
 }
 function setCookie(cname, cvalue) {
     const d = new Date();
     d.setTime(d.getTime() + (30*24*60*60*1000));
     let expires = "expires="+ d.toUTCString();
     document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
   }
