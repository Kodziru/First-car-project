"use strict";const isMobile={Android:function(){return navigator.userAgent.match(/Android/i)},BlackBerry:function(){return navigator.userAgent.match(/BlackBerry/i)},iOS:function(){return navigator.userAgent.match(/iPhone|iPad|iPod/i)},Opera:function(){return navigator.userAgent.match(/Opera Mini/i)},Windows:function(){return navigator.userAgent.match(/IEMobile/i)},any:function(){return isMobile.Android()||isMobile.BlackBerry()||isMobile.iOS()||isMobile.Opera()||isMobile.Windows()}};if(isMobile.any()){document.body.classList.add("_touch");let e=document.querySelectorAll(".menu__arrow");if(e.length>0)for(let t=0;t<e.length;t++){const n=e[t];n.addEventListener("click",(function(e){n.parentElement.classList.toggle("_active")}))}}else document.body.classList.add("_pc");const iconMenu=document.querySelector(".menu__icon"),menuBody=document.querySelector(".menu__body");iconMenu&&iconMenu.addEventListener("click",(function(e){document.body.classList.toggle("_lock"),iconMenu.classList.toggle("_active"),menuBody.classList.toggle("_active")}));const menuLinks=document.querySelectorAll(".menu__link[data-goto]");if(menuLinks.length>0){function o(e){const t=e.target;if(t.dataset.goto&&document.querySelector(t.dataset.goto)){const n=document.querySelector(t.dataset.goto).getBoundingClientRect().top+pageYOffset-document.querySelector("header").offsetHeight;iconMenu.classList.contains("_active")&&(document.body.classList.remove("_lock"),iconMenu.classList.remove("_active"),menuBody.classList.remove("_active")),window.scrollTo({top:n,behavior:"smooth"}),e.preventDefault()}}menuLinks.forEach((e=>{e.addEventListener("click",o)}))}