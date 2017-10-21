<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <title>c3rpbmo</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- My Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

        <!-- My JavaScript files -->
        <script src="javascript/textType.js"></script>
        <script src="javascript/functions.js"></script>
        <script>
          $( function() {
            $( "#accordion" ).accordion();
              $( "#accordion" ).hide();
          } );
            $(document).ready(function() {
    setTimeout(function() {
        $('#mainDiv').fadeOut('slow');
    }, 11000);

    $("#content").delay(11900).fadeIn();

});
      </script>
    </head>

    <body>
    <div class="jumbotron text-center"><!-- bootstrap to align page and make it responsible -->
        
        <!-- mainDiv where the magic entrance happens -->
        <div id="mainDiv">
            <div>
                <img src="images/logo.png">
            </div>
            <div>
                <div id="changeText">hello world! </div>       
                <div class="cursor" id="changeText" >|
                <script>window.cursorAnimation()</script>
                </div>
                <script>window.textType()</script>
            </div>
        </div>  <!-- end of mainDiv -->
    </div> <!-- end of bootstrap -->
        
        <div class="container" id="content" style="display: none"><br><!-- main container with content -->
            <!-- content of the page (interaction with the robot) -->
            <p id="header1">c3rpbmo</p>
                    <div id="accordion">
                        <h3>hi, hello, hi there, listen dammit: </h3>
                        <div>
                            <p>these commands are used to wake me up, but be kind! i take no shit</p>
                        </div>
                        <h3>what can i do</h3>
                        <div>
                            <p>this command gives you information on what i can help you with</p>
                        </div>
                        <h3>news, read news</h3>
                        <div>
                            <p>these commands are used to read the news. i use the rte rss feed to get the news.</p>
                            <p>simply type news, followed by one of the 3 types:</p>
                            
                            <ul>
                                <li>sports</li>
                                <li>business</li>
                                <li>entertainment</li>
                            </ul>
                        </div>
                        <h3>start cooking, cook, cooking</h3>
                        <div>
                            <p>these commands are used to assist you with the cooking.</p>
                            <p>you can type in a list of ingredients and i will show you what you can cook with them.</p>
                        </div>
                        <h3>who am i, register</h3>
                        <div>
                            <p>these commands are used to register yourself in the system.</p>
                            <p>you can add your details to a database.</p>
                        </div>
                        <h3>goodbye, bye</h3>
                        <div>
                            <p>these commands are used to register terminate the program.</p>
                            <p>the only way to wake me up is refreshing the page.</p>
                        </div>
                    </div>
            <div class="row">
                
                <div class="col-sm-1"></div> <!-- span 1 column-->
                <div class="col-sm-10"> <!-- the content of this div should ocupy 10 columns -->
                
                    <div class="form-group" id="log1"> <!-- bootstrap to make the text area responsive -->
                        <textarea readonly class="form-control" id="log" rows = 20></textarea>
                    </div>
                    <div align="middle" style="display: none" id="smile">
                        <img src="images/smiley.gif" >
                        <h2>Thanks very much for using</h2>
                        <p>Made by: Joao Paulo Jardim - 2014264</p>
                    </div>
                        
                    <div class="form-group" style="display: none" contenteditable="true" id="news"></div>
                    <div class="form-group" style="display: none" contenteditable="true" id="reg">
                        <h2>who are you? </h2><br>
                        <form class="form-horizontal" method="post">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" name ="name" class="form-control" id="name" placeholder="Enter your name">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Address:</label>
                                <div class="col-sm-10">
                                    <input type="text" name ="address" class="form-control" id="address" placeholder="Enter your address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Phone no.:</label>
                                <div class="col-sm-10">
                                    <input type="text" name ="phone" class="form-control" id="phone" placeholder="Enter your phone">
                                </div>
                            </div>

                            <div class="form-group">    
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default" id="sbmt" name="submit" value="register">Submit</button>
                                </div>
                            </div>

                        </form>
                        
                    </div>
                    
                    <?PHP
                        if(isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $address = $_POST['address'];
                            $phone = $_POST['phone'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            try {
                                $host = 'localhost';
                                $dbname = 'id429119_info';
                                $user = 'id429119_root';
                                $pass = '54321root';

                                $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "INSERT INTO info (name, address, phone, email) VALUES ('$name', '$address', '$phone', '$email')";
                                $conn->exec($sql);
                            }catch(PDOException $e){
                                echo $sql . "<br>" . $e->getMessage();
                            }
                            $conn = null;
                        }
                    ?> 

                    <div class="form-group"> 
                        <input type="text" class="form-control" id="msg"> <!-- input responsive -->
                    </div>
                </div>
                <div class="col-sm-1"></div> <!-- span 1 column-->
            </div> 
        </div> <!-- end of the content -->    
    </body>
    
    <script>
        var currentMode = '';
        var datacontent = '';
        var sentence = '';
        var recp1 = ["", "flour", "sugar", "salt", "yeast", "done"];
        var method1 = "Make the dough by putting the flour, sugar, salt and yeast into a large bowl. Add the oil to the warm water and pour into the dry Ingredients. Mix together to form a dough. Turn the dough onto a floured surface and knead for about 7 to 10 minutes, until dough is smooth and elastic.";
        var recp2 = ["", "butter", "bacon", "eggs", "cheese", "pasta", "done"];
        var method2 ="put the egg yolks into a bowl finely grate in the Parmesan, season with pepper, then mix well with a fork and put to one side. Cook the spaghetti in a large pan of boiling salted water until al dente. Add a splash of the cooking water and toss well, season with pepper, then pour in the egg mixture – the pan will help to cook the egg gently, rather than scrambling it. Toss well, adding more cooking water until it’s lovely and glossy. Serve with a grating of Parmesan and an extra twist of pepper.";
        var recp3 = ["", "butter", "chicken", "garlic", "salt", "onion", "done"];
        var method3 = "Melt butter in a large skillet over medium high heat. Add chicken and sprinkle with garlic powder, seasoning salt and onion powder. Saute about 10 to 15 minutes on each side, or until chicken is cooked through and juices run clear.";
        var food = [];
        
        function output(msg){
            // capture the output of the textarea
            var currentlog = $("textarea#log").val()

            // Set the value into the text area
            $("textarea#log").val(currentlog + '\n ' +'c3rbpmo: ' +msg);
        }
        
        function parseCommand(cmd){
            if(currentMode == 'cooking'){
                output('what ingredients do you have, tell me one by one and press enter. when you finish, type done')
                food.push(document.getElementById('msg').value);
                if(cmd == 'done'){
                    var x = food.length;
                    var numberOfMatches = 0;

                    for (i = 0; i < x; i++) {
                        var item = food[i];
                        var y = recp1.length;
                        for (ii = 0; ii < y; ii++) {
                            var currentItem = recp1[ii];
                            if(item == currentItem){
                                numberOfMatches = numberOfMatches + 1;
                            }
                        }
                        food =[];
                    }
                    
                 if(numberOfMatches == recp1.length){
                    output("Recipe found: pizza dough")
                    output(method1);
                     food = [];
                 } else {
                    output("you don't have enough ingredients");
                     food = [];
                }    
                    
            }
                if(cmd == 'stop cooking' || cmd =='no cooking' || cmd =='enough' || cmd =='no more cooking'){
                    output('ok no more cooking');
                    currentMode = '';
                }
            }

            if(currentMode == 'news'){
                output('option: sports, business, entertainment or exit the news mode');
                if(cmd.includes('sport') || cmd.includes('sports') ){
                    $('#log1').hide();
                    $.post( "sports.php", function( data ) {
                        datacontent=data;
                        $('#news').show();
                        $( "#news" ).html('<h2 >Sports</h2>' +  datacontent );
                    });
                } 

                if(cmd.includes('business')){
                    $('#log1').hide()
                    $.post( "business.php", function( data ) {
                        datacontent=data;
                        $('#news').show();
                        $( "#news" ).html('<h2 >Business</h2>' +  datacontent );
                    });
                }
                
                if(cmd.includes('entertainment')){
                    $('#log1').hide();
                    $.post( "entertainment.php", function( data ) {
                        datacontent=data;
                        $('#news').show();
                        $("#news").html('<h2 >Entertainment</h2>' +  datacontent );
                    });
                }
                
                if (cmd.includes('exit')){
                    $('#log1').show();
                    $('#news').hide();
                    output('Would you like to read other news?');
                    currentMode = '';
                }
            }
            
            if(currentMode == 'reg'){
                $('#log1').hide();
                $('#msg').hide();
                $('#reg').show();
            }
            
            if(currentMode == 'faq'){
                $('#log1').hide();
                $('#accordion').show();
            }
            
            if (cmd.includes('exit')){
                $('#log1').show();
                $('#news').hide();
                $('#accordion').hide();
                $('#reg').hide();
                output('What would you like to do now? ');
            }
            
            else {
                if(cmd.includes("hello") || cmd.includes("hi there") || cmd.includes("listen dammit") || cmd.includes("hi")){
                    output("hi there");
                    output("what would you like to do today?");
                }
                
                if(cmd.includes("what can i do?") || cmd.includes("what can i do")){
                    output("I have a few different functions...");
                    output("I can help you with the COOKING, show you the NEWS, REGISTER your details, tell you the TIMEZONE, and show you the FAQ");
                }
                
                if(cmd.includes("start cooking") || cmd.includes("cook") || cmd.includes("cooking")){
                    // Set the value into the text area
                    output("ok then, let's cook! press enter and follow the instructions I am giving to you carefuly");
                    currentMode = 'cooking';
                }
                
                if(cmd.includes("news") || cmd.includes("read news")){
                    // Set the value into the text area
                    output('sure, what headlines would you like to hear? ');
                    currentMode = 'news';
                }
                
                if(cmd.includes("who am I?") || cmd.includes("who am i?") || cmd.includes("who am I") || cmd.includes("who am i") || cmd.includes("register")){
                    output('thats a good question sir, you can register yourself with me:');
                    currentMode = 'reg';
                }
                
                if(cmd.includes("goodbye") || cmd.includes("bye")){
                    output("Thanks for using, I am always glad to help ;)");
                    $('#log1').hide();
                    $('#msg').hide();
                    $('#smile').show();
                }
                
                if(cmd.includes("faq") || cmd.includes("show me faq")){
                    currentMode = 'faq';
                }
                
                if(cmd.includes('translate')){
                    output("what would you like to translate? ");
                    currentlog = setence;
                    translate(sentence);
                }
                

            }
        }


        // bind on a key up (or when its released)
        $("#msg").on('keyup', function (e) {

          // if its the enter key, (called key 13)
            if (e.keyCode == 13) {
                // get message from the text field
                var txt = document.getElementById('msg').value;
                var currentlog = $("textarea#log").val()

                // Set the value into the text area
                $("textarea#log").val(currentlog + '\n ' +'me: ' +txt);

                // call the main brain       
                parseCommand(txt);
                // wipe the text field        
                document.getElementById('msg').value = '';
            }
        });
   
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
          }
        }
    </script>

    <?php
    function translate($sentence) {
        // Add the URL for the translate API, with the KEY we have created.
        $url = "https://www.googleapis.com/language/translate/v2?key=AIzaSyCDxLVY30Hdc-jP3LGy9xgboK6KOCbpYgM&source=en&target=de&q=";

        // Take a regular string and URL Encode it so it is safe to pass via the URL
        $str = urlencode($sentence);

        // Stick both of them together to page a single string
        $url .= $str;

        // Contact the serer to get the translation by passing the URL
        $json = file_get_contents($url);

        // Dump out the JSON document to the screen.
        var_dump($json);
    }
    ?>
</html>