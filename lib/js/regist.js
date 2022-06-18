const sendit = () => {
  const password = document.registform.password;
  const password_confirm = document.registform.password_confirm;

  if (password.value != password_confirm.value) {
    alert("The password is different.");
    password_confirm.focus();
    return false;
  }
  return true;
};

const checkId = () => {
  const uid = document.registform.uid;
  const result = document.querySelector("#result");

  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status == 200) {
        let txt = xhr.responseText.trim();
        if (txt == "O") {
          result.style.display = "block";
          result.style.color = "green";
          result.innerText = "The ID can be used.";
        } else {
          result.style.display = "block";
          result.style.color = "red";
          result.innerText = "Duplicate ID.";
          uid.focus();
          uid.addEventListener("keydown", function () {
            result.style.display = "none";
          });
        }
      }
    }
  };
  xhr.open("GET", "checkId_ok.php?uid=" + uid.value, true);
  xhr.send();
};
