<h2>Danh sách bài viết</h2>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
        <th>STT</th>
        <th>Tiêu đề</th>
        <th>Giới thiệu</th>
        <th>Ngày tạo</th>
    </thead>
    <tbody>
    <?php foreach ($posts as $key => $post): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><a href="./index.php?page=info&id=<?php echo $post->id ?>"><?php echo $post->title ?></a></td>
            <td><?php echo $post->teaser ?></td>
            <td><?php echo $post->created ?></td>
            <td><a class="btn btn-warning btn-sm" href="./index.php?page=delete&id=<?php echo $post->id ?>">Delete</a></td>
            <td><a class="btn btn-sm" href="./index.php?page=edit&id=<?php echo $post->id ?>">Update</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>