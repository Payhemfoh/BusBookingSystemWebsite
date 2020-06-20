window.onload = function(){
    let element = document.getElementById("buy-ticket-area");
    element.classList.add("hidden");

    element = document.getElementById("buy-ticket-station");
    element.classList.add("hidden");
}

function nextSelection(){
    let element = document.getElementById("buy-ticket-area");
    element.classList.remove("hidden");

    element = document.getElementById("buy-ticket-station");
    element.classList.add("hidden");
}

function nextSelection2(){
    let element = document.getElementById("buy-ticket-station");
    element.classList.remove("hidden");
}