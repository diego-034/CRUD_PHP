function Delete(id) {
    $.ajax({
        url: 'http://localhost:8080/CRUD_PHP/Delete',
        data: { Delete: id },
        type: 'POST',
        success: function(response) {
            if (response) {
                $("#row" + id).remove();
                alert("Elimiado Exitosamente");
                console.log(response);
            } else {
                alert("Ocurrio un Error");
            }
        },
        error: function(xhr, status) {
            alert('Disculpe, existió un problema');
        }
    });
}

function Update(id) {
    $.ajax({
        type: 'GET',
        url: 'http://localhost:8080/CRUD_PHP/SelectOne',
        data: 'Edit=' + id,
        success: function(response) {
            var div = document.createElement("html");
            div.innerHTML = response;
            console.log(JSON.parse(div.querySelector("body").firstChild.textContent.trim()));
            // $("#bt-Update").val(response.Id);
            // $("#name").val(response.Name);
            // $("#password").val(response.Password);
            // $("#state").val(response.State ? "true" : "false");
            // $("#document").val(response.Document);
            // $("#bt-Update").css({ 'display': 'block' });
            // $("#bt-Add").css({ 'display': 'none' });
        },
        error: function(xhr, status) {
            alert('Disculpe, existió un problema');
        }
    });
}

function Add() {
    let name = $("#Name").val();
    let price = $("#Price").val();
    let stock = $("#Stock").val();
    let description = $("#Description").val();
    $.ajax({
        url: 'http://localhost:8080/CRUD_PHP/Add',
        data: { Add: true, Name: name, Price: price, Stock: stock, Description: description },
        type: 'POST',
        success: function(response) {
            console.log(response);
            if (response != null) {
                location.reload();
                alert("Agregado con exito")
            } else {
                alert("Ocurrio un error")
            }
        },
        error: function(xhr, status) {
            alert('Disculpe, existió un problema');
        }
    });
}