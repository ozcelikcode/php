<?php include "assets/inc/header.php"; ?>

<?php

$limit = 4;

$query = $db->prepare("SELECT * FROM articles");
$query->execute();

$total_results = $query->rowCount();
$total_pages = ceil($total_results / $limit);

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

$starting_limit = (($page - 1) * $limit);
$query = $db->prepare("SELECT * FROM articles ORDER BY article_id DESC LIMIT $starting_limit,$limit");
$query->execute();

?>

<?php while ($result = $query->fetch(PDO::FETCH_ASSOC)) :

    $article_image = $result["article_image"];
    $article_title = $result["article_title"];
    $article_coverletter = $result["article_coverletter"];
    $article_link = $result["article_link"];

?>


    <!-- // -->

    <img src='<?php echo $article_image; ?>' style="max-width:250px;">
    <?php echo $article_title; ?>

    <?php echo $article_coverletter; ?>

    <a href="<?php echo $page_link ?><?php echo $article_link; ?>" class="btn btn-primary">Read More...</a>

    <!-- // -->

<?php endwhile; ?>

<?php for ($i = 1; $i <= $total_pages; $i++) : ?>
    <a href="index.php?page=<?= $i ?>" class="btn btn-outline-primary"><?= $i ?></a>
<?php endfor; ?>

<?php require_once "assets/inc/footer.php"; ?>