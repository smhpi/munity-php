<?php include '../view/header.php'; ?>
<div class="row">
    <div class="col-sm">
        <aside style="float:left;">
            <h3>Product Category</h3>
            <ul>
                <?php foreach ($categories as $category) : ?>
                    <li>
                        <a href="?category_id=<?php echo $category['ProductSubcategoryID']; ?>">
                            <?php echo $category['Name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
    <div class="col-sm">
        <section>
            <table class="table">
                <thead class="thead-dark">
                    <th scope="col">ProductID</th>
                    <th scope="col">Name</th>
                    <th scope="col">List Price</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($products as $product) :
                        ?>
                        <tr>
                            <td><?php echo $product['ProductID']; ?></td>
                            <td><?php echo $product['Name']; ?></td>
                            <td><?php echo '$';
                                echo $product['ListPrice']; ?></td>
                            <td>...</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
</div>