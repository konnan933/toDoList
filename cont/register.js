function ID(elem) {
  return document.getElementById(elem);
}

function fetchcall() {
  var data = URLSearchParams();
  data.append("reg_szoveg", ID("reg_szoveg").value);
  data.append("reg_email", ID("reg_email").value);
  data.append("reg_jelszo", ID("reg_jelszo").value);

  fetch();
}
