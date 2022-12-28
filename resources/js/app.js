require('./bootstrap');

import Alpine from 'alpinejs';
import { defaultsDeep } from 'lodash';

window.Alpine = Alpine;

Alpine.start();

function getMessages() {
  fetch("http://ali98.uz/api/message", { method: 'GET' })
    .then((res) => res.text())
    .then((response) => {
      showMessages(JSON.parse(response));
    })
}
console.log("test")
Echo.channel('chat90').listen('MessageSent', (e) => 
console.log("chat90"),
getMessages());

