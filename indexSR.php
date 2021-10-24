<!DOCTYPE html>
<?php 
require 'require_php/conn.php';
$query_project = "SELECT * FROM `project`";
$result_project = $conn -> prepare($query_project);
$result_project->execute();
$projects = $result_project->fetchAll();
$page_title = "IA2 Galerija";
$css = "gallery-main.css";
$srb_link = "indexSR.php";
$eng_link = "index.php";
require 'require_php/header.php' ?>
        <?php require 'require_php/nav_sr.php' ?>
    </header>
    <div class='slide-down'>
        <div class="container">
            <div class="container-galleries">
                <?php foreach ($projects as $project): ?>
                    <a href=<?php echo 'slideSR.php?id=' . $project[0] ?>>
                    <div class="container-galleries-project bg bghover" id=<?php echo 'slide' .$result[0] ?>>
                            <img src=<?php echo $project[1] ?> class="project-image">
                            <p class="project-text"><?php echo $project[3] ?></p>
                    </div></a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <?php require 'require_php/footer.php' ?>
    <script src="script.js"></script>
</body>



