/* Refernez: https://www.geeksforgeeks.org/search-bar-using-html-css-and-javascript/ */

function search_veranstaltung() {
    let input = document.getElementById('searchbar').value
    input = input.toLowerCase();
    let x = document.getElementsByClassName('veranstaltung');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display = "none";
        }
        else {
            x[i].style.display = "table-row";
        }
    }
}