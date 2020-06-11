function Delete(id) {
    $.ajax({
        url: "http://localhost:8080/CRUD_PHP/Delete",
        data: { Delete: id },
        type: "POST",
        success: function(response) {
            if (response) {
                $("#row" + id).remove();
                alert("Elimiado Exitosamente");
            } else {
                alert("Ocurrio un Error");
            }
        },
        error: function(xhr, status) {
            alert("Disculpe, existió un problema");
        },
    });
}

function SelectOne(id) {
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/CRUD_PHP/SelectOne",
        data: "Edit=" + id,
        success: function(response) {
            var div = document.createElement("html");
            div.innerHTML = response;
            var response = JSON.parse(div.querySelector("body").firstChild.textContent.trim())
            $("#bt-Update").val(response.id);
            $("#Name").val(response.name);
            $("#Price").val(response.price);
            $("#Stock").val(response.stock);
            $("#Description").val(response.description);
            $("#bt-Update").css({ 'display': 'block' });
            $("#bt-Add").css({ 'display': 'none' });
        },
        error: function(xhr, status) {
            alert("Disculpe, existió un problema");
        },
    });
}

function Update(id) {
    let name = $("#Name").val();
    let price = $("#Price").val();
    let stock = $("#Stock").val();
    let description = $("#Description").val();
    $.ajax({
        url: "http://localhost:8080/CRUD_PHP/Update",
        data: {
            Id: id,
            Name: name,
            Price: price,
            Stock: stock,
            Description: description,
        },
        type: "POST",
        success: function(response) {
            if (response) {
                alert("Actualizado con exito");
                $("#Name").val(null);
                $("#Price").val(null);
                $("#Stock").val(null);
                $("#Description").val(null);
                location.reload();
            } else {
                alert("Ocurrio un error");
            }
        },
        error: function(xhr, status) {
            alert("Disculpe, existió un problema");
        },
    });
}

function Add() {
    let name = $("#Name").val();
    let price = $("#Price").val();
    let stock = $("#Stock").val();
    let description = $("#Description").val();
    $.ajax({
        url: "http://localhost:8080/CRUD_PHP/Add",
        data: {
            Add: true,
            Name: name,
            Price: price,
            Stock: stock,
            Description: description,
        },
        type: "POST",
        success: function(response) {
            if (response) {
                alert("Agregado con exito");
                $("#Name").val(null);
                $("#Price").val(null);
                $("#Stock").val(null);
                $("#Description").val(null);
                location.reload();
            } else {
                alert("Ocurrio un error");
            }
        },
        error: function(xhr, status) {
            alert("Disculpe, existió un problema");
        },
    });
}