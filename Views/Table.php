<div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $invoice) : ?>
                    <tr>
                        <th scope="row"><?php echo $invoice[0]; ?></th>
                        <td><?php echo $invoice[1]; ?></td>
                        <td><?php echo $invoice[2]; ?></td>
                        <td><?php echo $invoice[3]; ?></td>
                        <td><?php echo $invoice[4]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>