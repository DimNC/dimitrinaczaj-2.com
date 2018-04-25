<!DOCTYPE html>
<html>
    <head>
        <title>WebExp Package</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>


    <body>

       <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Oh dear… it seems I have a lot of work. The package will be available soon, I'll keep you in touch if you leave your email adress right below.</h2>
            </div>

           <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="" role="form">
                        <div class="row">
                            <div class="col-md-6">
                              <label for="name">Name <span class="blue">*</span></label>
                              <input id="name" type="text" name="name" class="form-control" placeholder="Name…">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                              <label for="email">email <span class="blue">*</span></label>
                              <input id="email" type="text" name="email" class="form-control" placeholder="email…">
                              <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" class="form-control" placeholder="If you wanna say hello!" rows="4"></textarea>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p class="blue"><strong>* Required</strong></p>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="button1" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
           </div>
        </div>

    </body>

</html>
