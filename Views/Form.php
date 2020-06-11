<div class="container mt-4 mb-4">
    <form>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nombre de Producto</label>
                    <input type="text" class="form-control" id="Name" placeholder="Nombre de Producto">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Precio</label>
                    <input type="text" class="form-control" id="Price" placeholder="Precio">
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="formGroupExampleInput">Stock</label>
                    <input type="text" class="form-control" id="Stock" placeholder="Stock">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Descripción</label>
                    <input type="text" class="form-control" id="Description" placeholder="Descripción">
                </div>
            </div>
        </div>
        <button type="button" id="bt-Update" onclick="Update(this.value)" class="btn btn-primary" style="display:none">Actualizar</button>
        <button type="button"  id="bt-Add" value="Add" onclick="Add()"  class="btn btn-success">Agregar</button>
    </form>
</div>