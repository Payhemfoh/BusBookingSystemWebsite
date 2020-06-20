window.onload = function(){
    let element = document.getElementById("form1");
    element.classList.add("hidden");

    element = document.getElementById("form2");
    element.classList.add("hidden");

    element = document.getElementById("form3");
    element.classList.add("hidden");

    element = document.getElementById("form4");
    element.classList.add("hidden");
}

function showHomepageForm1(){
    let element = document.getElementById("form1");
    element.classList.remove("hidden");

    element = document.getElementById("form2");
    element.classList.add("hidden");

    element = document.getElementById("form3");
    element.classList.add("hidden");

    element = document.getElementById("form4");
    element.classList.add("hidden");
}

function showHomepageForm2(){
    let element = document.getElementById("form2");
    element.classList.remove("hidden");

    element = document.getElementById("form1");
    element.classList.add("hidden");

    element = document.getElementById("form3");
    element.classList.add("hidden");

    element = document.getElementById("form4");
    element.classList.add("hidden");
}

function showHomepageForm3(){
    let element = document.getElementById("form3");
    element.classList.remove("hidden");

    element = document.getElementById("form1");
    element.classList.add("hidden");

    element = document.getElementById("form2");
    element.classList.add("hidden");

    element = document.getElementById("form4");
    element.classList.add("hidden");
}

function showHomepageForm4(){
    let element = document.getElementById("form4");
    element.classList.remove("hidden");

    element = document.getElementById("form1");
    element.classList.add("hidden");

    element = document.getElementById("form2");
    element.classList.add("hidden");

    element = document.getElementById("form3");
    element.classList.add("hidden");
}