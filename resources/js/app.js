
import './alpine';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


chrome.runtime.onMessage.addListener(function(request, sender, sendResponse) {
  if (request.message === "someMessage") {
    asyncFunction().then(response => {
      sendResponse(response);
    }).catch(error => {
      console.error(error);
      sendResponse({ error: error.message });
    });
    return true; // Indica que la respuesta será asincrónica
  }
});

function asyncFunction() {
  return new Promise((resolve, reject) => {
    // Simulación de una operación asincrónica
    setTimeout(() => {
      resolve({ success: true });
    }, 1000);
  });
}
