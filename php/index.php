<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/styles/color.css">
        <link rel="stylesheet" href="/styles/breadcrumbs.css">
        <link rel="stylesheet" href="/styles/style.css">
        <style>
            
        </style>
    </head>
    <body>
        <div id="island">
            <header>
                <!-- Header -->
                <a href="/html"><img id="header-image" src="/images/BlankVersaLogoTrans.png" alt="header image"></a>
            </header>
            <main id="grid">
<?php           include 'nav.php'; ?>
                <section id="content">
                    <div class="section-title">
                        🖹 Content
                         
                    </ul> 
                    </div>
                    <!-- TODO: Make breadcrumbs replace section-title -->
                    <ul class="breadcrumb">
                            <li>⌂ Home</li>
                    </ul>
<?php               include 'content.php'; ?>                       
                </section>
<?php           include 'updates.php'; ?>
            </main>
<?php       include 'footer.php'; ?>
        </div>
    </body>
</html>