const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");
const cookieAnuluj = document.querySelector(".cookie-anuluj");
//klikniecie ok 
cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});
//zamykanie banera lecz nie zgadzanie sie na cookie
cookieAnuluj.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  
});
// ustawieni timeoutu po jakim ma baner sie wyswietlic
setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 1000);