function price(e) {
    if (e.target.value == "cardiologica") {
        document.getElementById("prezzo").value = "70";
    } else if (e.target.value == "neurologica") {
        document.getElementById("prezzo").value = "90";
    } else if (e.target.value == "fisioterapistica") {
        document.getElementById("prezzo").value = "45";

    }
}
