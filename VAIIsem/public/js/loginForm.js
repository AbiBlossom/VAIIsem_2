window.onload = () => {

    validateInput(document.getElementById("email"), function (value = null){
        if (value == null || value.length == 0) {
            return "Zadajte email!";
        }
        let re = new RegExp('^\\S+@\\S+\\.\\S+$');
        if (!re.test(value)) {
            return "Zadaný email nie je v správnom tvare."
        }
    });

    validateInput(document.getElementById("password"), function (value = null) {
        if (value == null || value.length == 0) {
            return "Zadajte heslo!";
        }

    });
}
;