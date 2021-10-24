<!DOCTYPE html>
<?php
require 'require_php/conn.php';

$page_title_query = "SELECT title FROM `project` WHERE `project_id` = ". $_GET['id'];
$page_title_array = $conn -> prepare($page_title_query);
$page_title_array->execute();
$page_titles = $page_title_array->fetchAll();


$query_project = "SELECT * FROM `project_slide` WHERE `fk_project_id` = ". $_GET['id'];
$result_project = $conn -> prepare($query_project);
$result_project->execute();
$projects = $result_project->fetchAll();

$page_title = "IA2 ".$page_titles[0][0];
$css = "gallery-main.css";
$srb_link = "slideSR.php?id=".$_GET['id'];
$eng_link = "slide.php?id=".$_GET['id'];


$inc = 0;
require 'require_php/header.php' ?>

<?php require 'require_php/nav_sr.php' ?>
    </header>
    <div class='slide-down'>
        <div class="container">
            <div class="container-galleries">
                <?php foreach ($projects as $project): ?>
                    <div class="gallery-flex container-galleries-project bg bghover" id=<?php echo $inc++ ?>>
                            <img src="<?php echo $project[2] ?>" class="gallery-image">
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