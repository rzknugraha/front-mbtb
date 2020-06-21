var sliders = document.querySelectorAll(".slider-content");
var timeOuts = [];

window.onload = () => {
  sliders.forEach(function (slider, idx) {
    var slider = document.querySelectorAll(".slider-content")[idx];
    addLast(slider);
    addZero(slider);

    autoSlide(idx);
  });
};

function addLast(slider) {
  var cloneFirst = slider
    .querySelector(".slider-item.slider-1")
    .cloneNode(true);
  cloneFirst.classList.remove("slider-1");
  cloneFirst.classList.add("slider-4");

  slider.appendChild(cloneFirst);
}

function addZero(slider) {
  var cloneLast = slider.querySelector(".slider-item.slider-3").cloneNode(true);
  cloneLast.classList.remove("slider-3");
  cloneLast.classList.add("slider-0");

  slider.insertBefore(cloneLast, slider.childNodes[0]);
}

function autoSlide(idx) {
    timeOuts[idx] = setInterval(() => {
      onSlide(idx, 1);
    }, 5000);
}

function onSlide(idx, move) {
  clearInterval(timeOuts[idx]);
  var slider = sliders[idx];

  let childs = slider.querySelectorAll(".slider-item");
  //   if (move) childs[0].parentNode.appendChild(childs[0]);
  //   else childs[2].parentNode.insertBefore(childs[2], childs[0]);
  //    childs[1].insertBefore(childs[0], childs[1]);

  childs.forEach(function (child) {
    if (child.classList.contains("slider-1")) {
      child.classList.remove("slider-1");
      child.classList.add(move ? "slider-0" : "slider-2");
    } else if (child.classList.contains("slider-2")) {
      child.classList.remove("slider-2");
      child.classList.add(move ? "slider-1" : "slider-3");
    } else if (child.classList.contains("slider-3")) {
      child.classList.remove("slider-3");
      child.classList.add(move ? "slider-2" : "slider-4");
    } else if (child.classList.contains("slider-4")) {
      if (move) {
        child.classList.remove("slider-4");
        child.classList.add("slider-3");
      } else child.remove();
    } else {
      if (move) child.remove();
      else {
        child.classList.remove("slider-0");
        child.classList.add("slider-1");
      }
    }
  });

  slider = document.querySelectorAll(".slider-content")[idx];
  if (move) {
    addLast(slider);
  } else {
    addZero(slider);
  }

  autoSlide(idx);
}
