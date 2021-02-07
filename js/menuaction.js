function bar_active() {
    var table = document.getElementById("bar_menu");
    table.classList.add("chosen-active")
    var btn = document.getElementById("bar_button");
    btn.classList.add("type-active")

    var table = document.getElementById("kitchen_menu");
    table.classList.remove("chosen-active")
    var btn = document.getElementById("kitchen_button");
    btn.classList.remove("type-active")
}
function kitchen_active() {
    var table = document.getElementById("kitchen_menu");
    table.classList.add("chosen-active")
    var btn = document.getElementById("kitchen_button");
    btn.classList.add("type-active")
    
    var table = document.getElementById("bar_menu");
    table.classList.remove("chosen-active")
    var btn = document.getElementById("bar_button");
    btn.classList.remove("type-active")
}