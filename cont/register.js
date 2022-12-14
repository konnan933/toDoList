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
      console.log(response.url);
      console.log(window.location.href);
      console.log(window.location.href != response.url);
      if ("http://localhost/toDoList/cont/regisztracio.php" != response.url) {
        window.location.assign(response.url);
      } else {
        window.location.assign(window.location.href);
        alert("Már használt e-mail!");
      }

      return response.text;
    })
    .then((text) => {
      console.log(text);
    })
    .catch(function (err) {
      console.log(err);
    });

  return false;
}
