document.getElementById("petit").addEventListener("click", petit);
document.getElementById("mitja").addEventListener("click", mitja);
document.getElementById("gran").addEventListener("click", gran);




var fs= 1;

function petit() {
    fs = fs-0.5;
    document.getElementByClassName("text").style.fontSize=(fs+"rem");
}


function mitja() {
    fs = fs;
    document.getElementByClassName("text").style.fontSize=(fs+"rem");
}


function gran() {
    fs = fs+0.5;
    document.getElementByClassName("text").style.fontSize=(fs+"rem");
}