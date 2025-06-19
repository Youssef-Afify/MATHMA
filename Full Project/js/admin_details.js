document.getElementById("delete").addEventListener("click", function () {
    document.getElementById("details_menu_1").style.display = "none";
    document.getElementById("details_menu_2").style.display = "block";
});
document.getElementById("cancel").addEventListener("click", function () {
    document.getElementById("details_menu_1").style.display = "block";
    document.getElementById("details_menu_2").style.display = "none";
});