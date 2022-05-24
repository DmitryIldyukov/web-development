const formOnElement = document.querySelectorAll('.open-form'),
formOffElement = document.querySelectorAll('.close-form'),
form = document.querySelector('.main__question'),
bgform = document.querySelector('.popup');

formOnElement.forEach(function(element) {
  element.addEventListener('click', () => {
    const id = requestAnimationFrame(popupOn);
    cancelAnimationFrame(id);
    return requestAnimationFrame(popupOn);
  })
});

function popupOn() {
  form.classList.add('popup_form-on');
  bgform.classList.add('popup_bg-on');
  form.classList.remove('popup_form-off');
  bgform.classList.remove('popup_bg-off');
}

formOffElement.forEach(function(element) {
  element.addEventListener('click', () => {
    const id = requestAnimationFrame(popupOff);
    cancelAnimationFrame(id);
    return requestAnimationFrame(popupOff);
  })
});

function popupOff() {
  form.classList.add('popup_form-off');
  bgform.classList.add('popup_bg-off');
  form.classList.remove('popup_form-on');
  bgform.classList.remove('popup_bg-on');
}

document.onkeydown = function (key) {
  if (key.code == "Escape") {
    popupOff();
  }
};