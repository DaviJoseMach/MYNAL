document.getElementById("addForm").addEventListener("submit", function (event) {
    event.preventDefault(); 

    var formData = new FormData(this);
    var xhr = new XMLHttpRequest();

    xhr.open("POST", this.action, true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            window.location.href = "http://localhost/mynal/front/main.php";
        }
    };
    
    xhr.send(formData);
});
