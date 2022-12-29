function check_form() {

    var err = document.getElementsByClassName("kommentar");

    var vorname = document.getElementById("vorname");
    var nachname = document.getElementById("nachname");
    var email = document.getElementById("email");
    var telefon = document.getElementById("telefon");
    var anliegen = document.getElementById("anliegen");

    vorname.style.borderColor = "";
    nachname.style.borderColor = "";
    email.style.borderColor = "";
    telefon.style.borderColor = "";
    anliegen.style.borderColor = "";

    if (vorname.value == null || vorname.value == "") {
        vorname.style.borderColor = "red";
        err.innerHTML = "<p>Bitte füllen Sie mindestens die Pflichtfelder aus!</p>";
    }

    else if (nachname.value == null || nachname.value == "") {
        nachname.style.borderColor = "red";
        err.innerHTML = "<p>Bitte füllen Sie mindestens die Pflichtfelder aus!</p>";
    }

    else if (email.value == null || email.value == "") {
        email.style.borderColor = "red";
        err.innerHTML = "<p>Bitte füllen Sie mindestens die Pflichtfelder aus!</p>";
    }

    else if (anliegen.value == null || anliegen.value == "") {
        anliegen.style.borderColor = "red";
        err.innerHTML = "<p>Bitte füllen Sie mindestens die Pflichtfelder aus!</p>";
    }

    else if (check_vorname() == false) {
        vorname.style.borderColor = "red";
        err.innerHTML = "<p>Bitte geben Sie einen gültigen Namen ein!</p>"
    }

    else if (check_nachname() == false) {
        nachname.style.borderColor = "red";
        err.innerHTML = "<p>Bitte geben Sie einen gültigen Namen ein!</p>"
    }

    else if (check_mail() == false) {
        email.style.borderColor = "red";
        err.innerHTML = "<p>Bitte geben Sie eine gültige Mailadresse ein!</p>"
    }

    else if (check_telNum() == false) {
        telefon.style.borderColor = "red";
        err.innerHTML = "<p>Bitte geben Sie eine gültige Telefon-Nummer ein!</p>"
    }

    else if (check_anliegen() == false) {
        anliegen.style.borderColor = "red";
        err.innerHTML = "<p>Bitte geben Sie einen gültigen Text ein! <br> Erlaubt sind die folgenden Zeichen: A-Z a-z 0-9 , . ! ? - +</p>"
    }
}


function check_vorname() {
    var x = document.getElementById("vorname").value;
    var validate = /[A-Z]{1}+[a-z]/;
    if (x.matches(validate)) {
        return true;
    } else {
        return false;
    }
}

function check_nachname() {
    var x = document.getElementById("nachname").value;
    var validate = /[A-Z]{1}+[a-z]/;
    if (x.matches(validate)) {
        return true;
    } else {
        return false;
    }
}

function check_mail() {
    var x = document.getElementById("email").value;
    var validate = /[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}/;
    if (x.matches(validate)) {
        return true;
    } else {
        return false;
    }
}

function check_telNum() {
    var x = document.getElementById("telefon").value;
    var validate = /[0-9]+[-\s\/\\]{1}+[0-9]/;
    if (x.matches(validate)) {
        return true;
    } else {
        return false;
    }
}

function check_anliegen() {
    var x = document.getElementById("anliegen").value;
    var validate = /[A-Za-z0-9,.!?-+]/;
    if (x.matches(validate)) {
        return true;
    } else {
        return false;
    }
}