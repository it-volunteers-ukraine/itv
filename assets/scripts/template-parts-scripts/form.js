const popupSuccess=document.getElementById("popup-success"),popupMessage=document.querySelector(".popup"),closeButton=document.querySelector(".popup__close"),errorPhone=document.querySelector(".error-phone");document.addEventListener("wpcf7submit",(function(e){let o=e.detail.inputs;for(let e=0;e<o.length;e++)if("mask-phone"==o[e].name){if(console.log(Number(o[e].value.length)),o[e].value.length<19){errorPhone.innerHTML="Будь ласка, заповніть це поле.",errorPhone.classList.add("wpcf7-not-valid-tip");break}if(!Number(o[e].value)){errorPhone.innerHTML="Будь ласка, заповніть це поле.",errorPhone.classList.add("wpcf7-not-valid-tip");break}}}),!1),document.addEventListener("wpcf7mailsent",(function(e){popupMessage.classList.add("opened"),document.body.classList.add("block"),closeButton.onclick=()=>{popupMessage.classList.remove("opened"),popupMessage.classList.add("closen"),document.body.classList.remove("block"),errorPhone.innerHTML="",errorPhone.classList.remove("wpcf7-not-valid-tip")}}),!1);