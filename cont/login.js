function ID(elem) {
  return document.getElementById(elem);
}
function QS(elem) {
  return document.querySelector(elem);
}

QS(".bejelentkezes").onclick = tarolas();
function tarolas() {
  console.log(ID("bej_email").value);
  window.localStorage.setItem("email", ID("bej_email").value);
}
