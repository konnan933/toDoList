function ID(elem) {
  return document.getElementById(elem);
}

function fetchcall() {
  var data = new URLSearchParams();
  data.append("reg_email", ID("reg_email").value);
  data.append("reg_szoveg", ID("reg_szoveg").value);
  data.append("reg_jelszo", ID("reg_jelszo").value);

  fetch("../cont/regisztracio.php", {
    method: "post",
    body: data,
  })
    .then(function (response) {
      return response.text();
    })
    .then(function (text) {
      console.log(text);
    })
    .catch(function (err) {
      console.log(err);
    });

  return false;
}
