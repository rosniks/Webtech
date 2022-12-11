const knopf1 = document.getElementById("knopf1");
const knopf2 = document.getElementById("knopf2");
const knopf3 = document.getElementById("knopf3");
const slide = document.getElementsByClassName('slide');
const slider = document.getElementsByClassName("slider");

knopf1.addEventListener("mouseover", () => {
    knopf1.style.backgroundColor = "black";
})
knopf1.addEventListener("mouseleave", () => {
    knopf1.style.backgroundColor = "white";
})
knopf1.addEventListener("click", () => {
    for (var s = 0; s < slide.length ; s++)
        slide[s].style.right = "0%";
})

knopf2.addEventListener("mouseover", () => {
    knopf2.style.backgroundColor = "black";
})

knopf2.addEventListener("mouseleave", () => {
    knopf2.style.backgroundColor = "white";
})
knopf2.addEventListener("click", () => {
    for (var s = 0; s < slide.length ; s++)
        slide[s].style.right = "100%";
})

knopf3.addEventListener("mouseover", () => {
    knopf3.style.backgroundColor = "black";
})

knopf3.addEventListener("mouseleave", () => {
    knopf3.style.backgroundColor = "white";
})
knopf3.addEventListener("click", () => {
    for (var s = 0; s < slide.length ; s++)
        slide[s].style.right = "200%";
})

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function slideTimer() {
    while(true){
        await sleep(10000);
        for (var s = 0; s < slide.length ; s++){
            slide[s].style.right = "100%";
        }
        await sleep(10000)
        for (var s = 0; s < slide.length ; s++){
            slide[s].style.right = "200%";
        }
        await sleep(10000)
        for (var s = 0; s < slide.length ; s++){
            slide[s].style.right = "0%";}
    }
}

slider.addEventListener("mouseout", slideTimer());
