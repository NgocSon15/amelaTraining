<?php
    if (isset($message))
    {
        echo "<p class='alert-info'>$message</p>";
    }
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới sản phẩm</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" name="title" placeholder="Nhập tiêu đề" required>
                </div>
                <div class="form-group">
                    <label>Giới thiệu</label>
                    <input type="text" class="form-control" name="teaser" placeholder="Giới thiệu" required>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea type="text" class="form-control" name="content" placeholder="Nhập nội dung" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>
