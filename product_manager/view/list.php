<h2>Danh sách sản phẩm</h2>
<a href="./index.php?page=add">Thêm mới</a>
<form method="post">
    <input type="text" name="name"/>
    <input type="submit" value="Tìm kiếm" class="btn btn-primary">
</form>
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Producer</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td> <a href="./index.php?page=info&id=<?php echo $product->id; ?>"><?php echo $product->name ?></a></td>
        <td><?php echo $product->price ?></td>
        <td><?php echo $product->description ?></td>
        <td><?php echo $product->producer ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>
    <?php endforeach; ?>
    </tbody>
</table>
