<div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acción</th>

            </tr>
        </thead>
        <tbody id="Table">
            <?php
            foreach ($data as $invoice) : ?>
                <tr id="row<?php echo $invoice[0]; ?>">
                    <th scope="row"><?php echo $invoice[0]; ?></th>
                    <td><?php echo $invoice[1]; ?></td>
                    <td><?php echo $invoice[2]; ?></td>
                    <td><?php echo $invoice[3]; ?></td>
                    <td><?php echo $invoice[4]; ?></td>
                    <td>
                        <button type="button" value="<?php echo $invoice[0]; ?>" onclick="Delete(this.value)" class="btn btn-danger">Eliminar</button>
                        <button type="button" value="<?php echo $invoice[0]; ?>" onclick="SelectOne(this.value)" class=" ml-4 btn btn-primary">Actualizar</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>