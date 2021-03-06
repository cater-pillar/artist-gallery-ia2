<head>
    <title><?php echo $page_title ?></title>
    <link rel="icon" href="designMaterial/littlestamp.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href=<?php echo $css ?>>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="container-lang-select">
            <button class="lang-button bg bghover"><svg class="lang-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
               <g>
                   <path d="M263.92,117.679c-15.756,24.262-41.514,69.992-46.599,116.204h92.925C305.204,187.577,279.603,141.92,263.92,117.679z"/>
               </g>
               <g>
                   <path d="M121.152,233.883h64.615c4.457-48.702,28.332-95.499,46.076-124.333C173.003,123.025,127.827,172.752,121.152,233.883z"/>
               </g>
               <g>
                   <path d="M295.934,109.518c17.65,28.834,41.42,75.642,45.856,124.364h64.939C400.054,172.71,354.826,122.962,295.934,109.518z"/>
               </g>
               <g>
                   <path d="M217.321,265.27c5.064,46.295,30.811,91.973,46.567,116.193c15.672-24.262,41.294-69.992,46.348-116.193H217.321z"/>
               </g>
               <g>
                   <path d="M185.767,265.27h-64.615c6.675,61.12,51.851,110.847,110.69,124.333C214.099,360.769,190.224,313.971,185.767,265.27z"/>
               </g>
               <g>
                   <path d="M438.587,73.413C391.245,26.072,328.304,0,261.346,0c-66.948,0-129.888,26.072-177.23,73.413
                       c-40.478,40.468-66.058,94.045-72.032,150.865c-5.618,53.451,6.204,107.729,33.322,153.711L0,512l134.011-45.417
                       c45.981,27.129,100.249,38.94,153.7,33.322c56.82-5.974,110.397-31.554,150.876-72.022C485.928,380.542,512,317.591,512,250.643
                       S485.928,120.755,438.587,73.413z M263.941,424.609c-96.514,0-175.033-78.519-175.033-175.033S167.427,74.543,263.941,74.543
                       s175.033,78.519,175.033,175.033S360.455,424.609,263.941,424.609z"/>
               </g>
               <g>
                   <path d="M341.79,265.27c-4.436,48.712-28.206,95.531-45.856,124.354c58.892-13.444,104.12-63.192,110.795-124.354H341.79z"/>
               </g>
           </svg></button>
                <div class="lang-dropdown bg bghover">
                    <a href=<?php echo $srb_link?>>SRB</a>
                    <a href=<?php echo $eng_link?>>ENG</a>
                </div>
        </div>