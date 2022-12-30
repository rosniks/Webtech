const form = document.getElementById("kontaktForm");
const err = document.getElementById("error");

const vorname = document.getElementById("vorname");
const nachname = document.getElementById("nachname");
const email = document.getElementById("email");
const telefon = document.getElementById("telefon");
const anliegen = document.getElementById("anliegen");

// dynamisches Überprüfen des Formulars

form.addEventListener('submit', (e) => {

    if ((vorname.value === null || vorname.value == "") || (nachname.value === null || nachname.value == "") || (email.value === null || email.value == "") || (anliegen.value === null || anliegen.value == "")) {
        e.preventDefault();
        err.style.color = "red";
        document.getElementById("error").innerHTML = "Bitte füllen Sie mindestens die Pflichtfelder (*) aus!";
    }

    if (document.getElementById("anrede").value === "anrede0") {
        e.preventDefault();
        err.style.color = "red";
        document.getElementById("error").innerHTML = "Bitte wählen Sie eine für Sie passende Anrede unter \"Ihr Name\" aus!";
    }

    if (check_vorname() === false) {
        e.preventDefault();
        err.style.color = "red";
        document.getElementById("error").innerHTML = "Bitte geben Sie einen gültigen Namen ein! Beispiele sind: Anna, Fritz, Schneider, Müller";
    }

    if (check_nachname() === false) {
        e.preventDefault();
        err.style.color = "red";
        document.getElementById("error").innerHTML = "Bitte geben Sie einen gültigen Namen ein! Beispiele sind: Anna, Fritz, Schneider, Müller";
    }

    if (check_mail() === false) {
        e.preventDefault();
        err.style.color = "red";
        document.getElementById("error").innerHTML = "Bitte geben Sie eine gültige Mailadresse ein! Ein Beispiel wäre musterman@web.de";
    }

    if (check_telNum() === false) {
        e.preventDefault();
        err.style.color = "red";
        document.getElementById("error").innerHTML = "Bitte geben Sie eine gültige Telefon-Nummer ein!";
    }

    if (check_anliegen() === false) {
        e.preventDefault();
        err.style.color = "red";
        document.getElementById("error").innerHTML = "Bitte geben Sie einen gültigen Text ein! Erlaubt sind die folgenden Zeichen: A-Z a-z 0-9 , . ! ? - +";
    }

    if ((document.getElementById("anrede").value != "anrede0") && (check_vorname() === true) && (check_nachname() === true) && (check_mail() === true) && (check_telNum() === true) && (check_anliegen() === true)) {
        window.alert("Ihre Daten wurden erfolgreich übermittelt!");
    }

})


// Festlegung der regulären Ausdrücke für die Überprüfung

function check_vorname() {

    var validate = /^[a-z A-Z äöüÄÖÜ \s -]+$/;

    if (vorname.value.match(validate)) {
        return true;
    } {
        return false;
    }

}

function check_nachname() {

    var validate = /^[a-z A-Z äöüÄÖÜ \s -]+$/;

    if (nachname.value.match(validate)) {
        return true;
    } {
        return false;
    }

}

function check_mail() {

    var validate = /^[a-z A-Z 0-9 . _ -]+@[a-z A-Z 0-9 . -]+\.[a-z A-Z]{2,4}$/;

    if (email.value.match(validate)) {
        return true;
    } {
        return false;
    }

}

function check_telNum() {

    var validate = /^[0-9 + / - \s]+$/;

    if (telefon.value.match(validate)) {
        return true;
    } {
        return false;
    }

}

function check_anliegen() {

    var validate = /^[A-Z a-z ß üäö ÜÄÖ 0-9 \s , . ! ? -]+$/;

    if (anliegen.value.match(validate)) {
        return true;
    } {
        return false;
    }

}


// Dynamisches erscheinen der Raumbuchung

function add_raume() {
    if (document.getElementById("zweck").value === "zweck2") {
        document.getElementById("fieldsetRaum").innerHTML = "<fieldset> <legend>Raumauswahl (*)</legend > <select id=\"raumwahl\" name=\"raumwahl\"> <option value=\"raum0\">-/-</option> <option value=\"raum1\">Gemeinschaftsraum</option> <option value=\"raum2\">Saal 1</option> <option value=\"raum3\">Saal 2</option> <option value=\"raum4\">Saal 3</option> <option value=\"raum4\">Z1</option> <option value=\"raum4\">Z2</option> <option value=\"raum4\">Z3</option> <option value=\"raum4\">Küche</option> <option value=\"raum4\">Ich möchte mehrere Räume buchen!</option> </select> </fieldset >";
    } else {
        document.getElementById("fieldsetRaum").innerHTML = "";
    }
}