<?php
require('reqs/funcs.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Contact form with captcha</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="<?php echo $root_url ?>/css/layouts/blog-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="<?php echo $root_url ?>/css/layouts/blog.css">
        <!--<![endif]-->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            
            <h1 class="brand-title"><img  class="logo" src="https://www.shareicon.net/data/512x512/2017/04/22/885106_food_512x512.png" alt=""> Strawberry</h1>
            <h2 class="brand-tagline">PHP Contact Form with Google reCAPTCHA</h2>

            <nav class="nav">
                <ul class="nav-list">
                  
                    <li class="nav-item">
                        <a class="pure-button" href="https://developers.google.com/recaptcha/">What is reCaptcha?</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
           
            <div class="posts">
                <h1 class="content-subhead">Descriptions</h1>

<pre>
Contact form with captcha code validation may be useful to validate a human user against bots. 
Using this Google reCAPTCHA code, we can validate 
the human users and protect the form submission from bots.
</pre>
                <section class="post">
                    <header class="post-header">
                        <h2 class="post-title">Contact Form</h2>
                    </header>
                    <div class="post-description">
                    <aside class="aside-primary">
                        <p>
                            test
                        </p>
                    </aside>
                    <form class="pure-form pure-form-aligned" method="POST" action="<?php echo $root_url ?>/reqs/controller.php">
    <fieldset>
        <div class="pure-control-group">
            <label for="name">Fullname</label>
            <input id="name" type="text" name="fullname" placeholder="John Doe">
            <span class="pure-form-message-inline">This is a required field.</span>
        </div>
        <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" name="email" placeholder="Email Address">
        </div>
        <div class="pure-control-group">
            <label for="title">Title</label>
            <input id="title" type="text" name="title" placeholder="Title of your message">
            <span class="pure-form-message-inline">This is a required field.</span>
        </div>
      

        <div class="pure-control-group">
            <label for="message">Message</label>
           <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div class="pure-control-group" style="
    margin-left: 180px;
">
    <label for="">Capthca</label>
<div class="g-recaptcha" data-sitekey="6Lcn-QMTAAAAAMk3hg-Sj-Ld_bsAX8PjYZXLQRhw"></div>
</div>
        <div class="pure-controls">
            <button type="submit" name="send" class="pure-button pure-button-primary">Submit</button>
        </div>
    </fieldset>
</form>
                    </div>
                </section>

          
            </div>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="tel:+2348068170006" class="pure-menu-link">Ladapo Samuel</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>
