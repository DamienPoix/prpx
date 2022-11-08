var doc = document.getElementById("noStyle");
doc.addEventListener("mouseover",mouseOverColor);
doc.addEventListener("mouseout",mouseOutColor);

function mouseOverColor(){
    doc.style.color = "red";
};
function mouseOutColor(){
    doc.style.color = "rgba(0, 0, 0, 0.849)";
};
