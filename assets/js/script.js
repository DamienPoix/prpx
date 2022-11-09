var doc = document.getElementById("noStyle");
if (doc != null) {
    doc.addEventListener("mouseover",mouseOverColor);
    doc.addEventListener("mouseout",mouseOutColor);
    
    function mouseOverColor(){
        doc.style.color = "lime";
    };
    function mouseOutColor(){
        doc.style.color = "rgba(0, 0, 0, 0.849)";
    };
}
    