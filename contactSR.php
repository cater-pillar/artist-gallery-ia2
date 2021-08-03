<!DOCTYPE html>
<?php 
    require 'require_php/conn.php';
    $query_contact = "SELECT * FROM `contact`";
    $query_result = $mysqli -> query($query_contact) -> fetch_all();
    $page_title = "IA2 Kontakt";
    $css = "contact.css";
    $srb_link = "contactSR.php";
    $eng_link = "contactEN.php";
    require 'require_php/header.php';
    require 'require_php/nav_sr.php'
?>
    </header>
    <div class='slide-down'>
        <div class='container'>
            <div class="container-contact">
            <?php foreach ($query_result as $result): ?>  
                <a href=<?php echo $result[1]; ?> class="contact-link" target="_blank">
                    <div class="container-link bg bghover">
                        <?php require $result[2]; ?>
                        <p><?php echo $result[4]; ?></p>
                    </div>
                </a>
            <?php endforeach ?>
                    
            </div>
        </div>
    </div>
    <?php require 'require_php/footer.php' ?> 
    <script src="script.js"></script>
</body>
