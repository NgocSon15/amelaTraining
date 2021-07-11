<h2>Chỉnh sửa bài viết</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $post->id; ?>"/>
    <div class="form-group">
        <label>Tiêu đề</label>
        <input type="text" name="title" value="<?php echo $post->title; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Giới thiệu</label>
        <input type="text" name="teaser" class="form-control" value="<?php echo $post->teaser; ?>">
    </div>
    <div class="form-group">
        <label>Nội dung</label>
        <textarea name="content" class="form-control"><?php echo $post->content; ?></textarea>
    </div>
    <input type="hidden" name="created" value="<?php echo $post->created; ?>"/>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
