function myFunction() {
    console.log("Button clicked");
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    console.log("Window clicked");
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
