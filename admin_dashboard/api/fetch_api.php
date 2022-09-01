<?php
$data = file_get_contents("http://localhost/crud/admin_dashboard/admin_dashboard/api/post.php");
?>
<script>
    const data = <?php echo $data; ?>;
    console.log(data);
</script>

