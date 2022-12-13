/* Refernez: https://robertcooper.me/post/table-row-links */

function on_click() {

    for (let i = 1; i <= 6; i++) {

        const row = document.getElementById(`row-${i}`);

        row.addEventListener("click", () => {
            window.location.href = `/row-${i}`;
        });

    }

}