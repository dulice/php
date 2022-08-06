<div class="card mb-3 fcard shadow">
    <div class="card-header">
        <p>
            <a href="fpost_detail.php?id=<?php echo $p['id']; ?>" class="h3 d-inline-block"><?php echo textLimit($p['title'], 70); ?></a>
        </p>
        <span>
            <i class="feather-user text-primary"></i>
            <span><?php echo (user($p['user_id'])['username']); ?></span>

            <i class="feather-layers text-danger"></i>
            <span><?php echo (singleListCategroy($p['category_id'])['title']); ?></span>

            <i class="feather-calendar text-info"></i>
            <span><?php echo showTime($p['created_at']); ?></span>
        </span>
    </div>
    <div class="card-body">
        <p class="text-black-50"><?php echo strip_tags(html_entity_decode((textLimit($p['description'],150)))); ?></p>
    </div>
</div>