<!DOCTYPE html>
<?php
require 'require_php/conn.php';

$page_title_query = "SELECT title_sr FROM `project` WHERE `project_id` = ". $_GET['id'];
$page_title_array = $mysqli -> query($page_title_query) -> fetch_all();

$query_project = "SELECT * FROM `project_slide` WHERE `fk_project_id` = ". $_GET['id'];
$result_project = $mysqli -> query($query_project) -> fetch_all();

$page_title = "IA2 ".$page_title_array[0][0];
$css = "gallery-main.css";
$srb_link = "test_slideSR.php?id=".$_GET['id'];
$eng_link = "test_slide.php?id=".$_GET['id'];


$inc = 0;
require 'require_php/header.php' ?>

<?php require 'require_php/nav_sr.php' ?>
    </header>
    <div class='slide-down'>
        <div class="container">
            <div class="container-galleries">
                <?php foreach ($result_project as $result): ?>
                    <div class="gallery-flex container-galleries-project bg bghover" id=<?php echo $inc++ ?>>
                            <img src="<?php echo $result[2] ?>" class="gallery-image">
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="container-slide shown bg">
        <div class="flex">
        <?php require "require_php/exit.php"; ?>
        <?php require "require_php/next.php"; ?>
        <?php require "require_php/prev.php"; ?>
        <img src="" class="mySlide">
        <p class="slideText"></p>
    </div>
    </div>
    <div class="container-slide hidden bg">
        <div class="flex">
        <?php require "require_php/exit.php"; ?>
        <?php require "require_php/next.php"; ?>
        <?php require "require_php/prev.php"; ?>
        <img src="" class="mySlide">
        <p class="slideText"></p>
        </div>
    </div>
    <?php require 'require_php/footer.php' ?>
    <script src="script.js"></script>
    <script src="script2.js"></script>
</body>