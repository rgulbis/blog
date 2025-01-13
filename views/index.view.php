<?php $title = "Blogs";?>
<?php $css = "css/styles_v3.css";?>
<?php require "components/header.php";?>
<?php require "components/navbar.php";?>
    <h1>Blogs</h1>

    <form>
        <input name="search_query" value="<?= $_GET['search_query'] ?? ""?>"/>
        <button>🔍🔎</button>
    </form>

    <?php if(count($posts) == 0) { ?>
    <h3>That aint a real thing!</h3>
    <?php } ?>

    <ul>
    <?php foreach($posts as $post) { ?>
        <li><?= $post["content"] ?></li>
    <?php } ?>
    </ul>
<?php require "components/footer.php";?>
    