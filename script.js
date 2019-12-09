function change () {
    var p = document.getElementById("ex1");
    
        p.src = "pic/조커.jpg";
    
}
function change2 () {
    var p = document.getElementById("ex1");
    
        p.src = "pic/포드v페라리이.jpg";
}
function change3 () {
    var p = document.getElementById("ex1");
    
        p.src = "pic/분노사진.jpeg";
}
setInterval(change, 6000);
setInterval(change2, 6500);
setInterval(change3, 4000);