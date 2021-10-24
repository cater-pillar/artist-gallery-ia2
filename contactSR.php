<!DOCTYPE html>
<?php 
    require 'require_php/conn.php';
    $query_contact = "SELECT * FROM `contact`";
    $query_result = $conn -> prepare($query_contact);
    $query_result->execute();
    $contacts = $query_result->fetchAll(); 
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
            <?php foreach ($contacts as $contact): ?>  
                <a href=<?php echo $contact[1]; ?> class="contact-link" target="_blank">
                    <div class="container-link bg bghover">
                        <?php require $contact[2]; ?>
                        <p><?php echo $contact[4]; ?></p>
                    </div>
                </a>
            <?php endforeach ?>
                    
            </div>
        </div>
    </div>
    <?php require 'require_php/footer.php' ?> 
    <script src="script.js"></script>
</body>
