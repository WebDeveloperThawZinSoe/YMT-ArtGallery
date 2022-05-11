<?php

    if(isset($_SESSION["success"])){
        ?>
<script>
swal("<?php echo $_SESSION['success'] ?>", "", "success");

</script>
  <?php
    $_SESSION['success'] = null;
  ?>
        <?php
    }

    if(isset($_SESSION["error"])){
        ?>
            <script>
swal("<?php echo $_SESSION['error'] ?> ", "", "error");

</script>
<?php
    $_SESSION['error'] = null;
?>
        <?php
    }
?>