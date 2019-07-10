<?php include '../view/header.php'; ?>
<div class="row">
    <div class="col">
        <h3>Product Category</h3>
        <aside>
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
    <div class="col-9">
        <section>
            <button type="button" class="btn btn-primary">
                <a href="?action=show_add_form">Add Product</a>
            </button>

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
                            <td>
                                <form action="." method="post">
                                    <input type="hidden" name="action" value="delete_product">
                                    <input type="hidden" name="product_id" value="<?php echo $product['ProductID']; ?>">
                                    <input type="hidden" name="category_id" value="<?php echo $product['ProductSubcategoryID']; ?>">
                                    <input type="submit" value="Delete product">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
</div>