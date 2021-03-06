 <?php
  $config = include('../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);
  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Essien Saviour</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin Slab" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style>
    .profile-body,body{color:#000000 ;text-align:center}
    .main-nav,.profile-body,body,header{text-align:center}
    .nav,footer ul{list-style-type:none}
    .nav a,a.social{transition:all .5s}*{box-sizing:border-box}
    body{margin:0;padding:0;font-family:"Ariel";background:lightgreen;}
    .profile-body{padding:20px}
    .slack-username{color:#fff;font-weight:700}a{text-decoration:none;color:#999}a:hover{color:#63f}
    .main-nav{width:100%;background:#000;min-height:30px;padding:10px;position:fixed}
    .nav{display:flex;justify-content:space-around;font-weight:700;margin:0 auto;padding:0}
    .nav .name{display:block;margin-right:auto;color:#fff}
    .nav li{padding:5px 10px 10px}.nav a:hover{color:#009688;font-size:20px}
 
    header .profile-image{margin-top:50px;width:150px;height:150px;border-radius:50%;border:3px solid #fff;transition:all .5s}
 
    .tag{background-color:rgba(2,2,2,.5);color:#fff;padding:10px;border-radius:5px;display:table;margin:10px auto}
    footer{width:100%;min-height:30px;padding:20px 0 40px 20px}
    footer .copyright{top:-8px;font-size:.75em}
    footer ul{margin:0;padding:0}
    footer ul li{display:inline-block}
    a.social{margin-left:5px;width:30px;height:30px;background-size:30px 30px;opacity:.4}
    a.twitter{color:#0084b4}
    a.facebook{color:#3b5998}
    a.github{color:#767676}
    a.social:hover{opacity:1}
    .clearfix{clear:both}
    .contact-info{list-style:none;padding:0;margin:0;font-size:.9em}
    .contact-info a{display:block;min-height:20px;background-repeat:no-repeat;background-size:20px 20px;padding:0 0 0 30px;margin:0 0 10px}
    .contact-info li.phone a{background-image:url(images/phone.png)}
    .contact-info li.mail a{background-image:url(images/mail.png)}
    .contact-info li.twitter a{background-image:url(images/twitter.png)}
    @media screen and (min-width:720px){.flex,.nav,footer{max-width:1200px}
    .flex{display:-ms-flexbox;display:flex;-ms-flex-pack:distribute;justify-content:space-around;margin:0 auto}
    header{min-height:470px}
    .nav{padding:0 30px}main{padding-top:20px}
    main p{line-height:1.6em}
    .btn-primary{background-color:#009688!important}
    footer{font-size:1.3em;margin:40px auto}
    label{display:block;text-align:left}
    input[type=email],input[type=text],select,textarea{width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;margin-top:6px;margin-bottom:16px;resize:vertical}
    a.link,input[type=submit]{background-color:black;color:#fff;padding:12px 20px;border:none;border-radius:4px;cursor:pointer}
    a.link{text-decoration:none}
    input[type=submit]:hover{background-color: blue;}
    .container{border-radius:5px;background-color:#ffffff;padding:20px;width:50%;margin:50px auto 10px}}
  </style>
</head>
  <body>

   

    <div id="home">
      <header>
        <img src='http://www.easywebsolutionz.com/images/essien-saviour.jpg' class="profile-image">
      
        <p class="slack-username fa fa-slack">@essien</p>
      </header>

      <div class="profile-body">
           
          <h4>I am Essien Saviour, a Web Developer, Founder of Whereedey Global Service, Creative Director of Easyweb Solutionz and Manager Startup Bayelsa. I enjoy spending all day with my baby (My Laptop).</h4>
      </div>
        <div class="text-center">
            <a class="link" href="https://github.com/iamessien/hnginterns" role="button"> Stage 1</a>                    
        </div>
    </div>
    
    

      <div class="container">
        <form action="../sendmail.php" method="get">

          <label for="email">Email</label>
          <input type="email" id="email" name="to" placeholder="Your Email Address.." required>

          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Enter Your Subject Here.." required>

          <label for="message">Message</label>
          <textarea id="message" name="body" placeholder="Your Message Here.." style="height:200px"></textarea>

          <input type="hidden" name="password" value="<?= $password; ?>" />

          <input type="submit" value="Send">
          
        </form>
      
    </div>

      <footer>
        <ul>
          <li><a href="https://web.facebook.com/saviourg" target="_blank" class="fa fa-facebook social facebook"></a></li>
          <li><a href="https://github.com/iamessien" target="_blank" class="fa fa-github social github"></a></li>
        </ul>
        
      </footer>
    
   
  </body>
</html>
