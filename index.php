<?php
session_start();
if (!isset($_SESSION["userId"])) {
    session_destroy();
    header("Location: login.php");
    die();
}

include __DIR__ . '/Controllers/steam.php';

?>
<?php
include __DIR__ . '/Views/header.php';
?>
<main class="container">
    <?php
    include __DIR__  . '/Views/table.php';
    ?>
</main>

<?php
include __DIR__ . '/Views/footer.php';
?>