<?php
$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinika</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <header class="header">
        <a hrerf="#"><i class="fa fa-heartbeat"></i><srong>World</srong>medical</a>
        <nav class="navbar">
            <a href="#home">Főoldal</a>
            <a href="#about">Rólunk</a>
            <a href="#services">Szolgáltatások</a>
            <a href="#doctors">Doctors</a>
            <a href="#appointment">Időpont</a>
            <a href="#review">Ismertet</a>
            <a href="#blogs">Blogs</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header> 
    <section class="home" id="home">
        <div class="image">
        <img src="./doctors-scaled.jpg" alt="">
    </div>

    <div class="content">
        <h3>Vigyázunk az egészségére</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque velit consequuntur magni quae quas molestiae non reiciendis vel sunt, repellat cum saepe repellendus, ipsum soluta? Rerum dignissimos magni repudiandae dolorum.</p>
        <a href="#appointment" class="btn">appointment us<span class="fas fa-chevron-right"></span></a>
    </div>
    </section>

<section class="icons-container">
    <div class="icons">
    <i class="fas fa-user-md"></i>
    <h3>150+</h3>
    <p>Orvos dolgozik</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>Elégedett beteg</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>Ágy kapacitás</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>Elérhető korházak</p>
    </div>
</section>   


<section class="about" id="about">
    <h1 class="heading"><span>about</span>us</h1>
    <div class="row">
        <div class="image">
            <img src="" alt="">
        </div>

        <div class="content">
            <h3>Garantáljuk a jó minőségű ellátást</h3>
            <p>Lorem ipsum dolor sit amet consectetur
                 adipisicing elit. Alias laudantium id vitae asperiores rerum nesciunt quos illum facilis iusto architecto reiciendis, cumque corrupti 
                animi voluptatum quas voluptas ex quam ducimus?</p>
            <p>Lorem</p>
            <a href="#" class="btn">Tudj meg többet <span class="fas fa-chevron-right"></span></a>
            </div>
    </div>
</section>

<section class="services" id="services">
    <h1 class="heading">our <span>services</span></h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Ingyenes vizsgálat</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis nesciunt consequatur aliquid obcaecati voluptate, mollitia dolorum eveniet ratione, odit quo harum blanditiis soluta ex aspernatur, a nobis rerum quia repudiandae?</p>
        <a href="#" class="btn">Tudj meg többet<span class="fas fa-chevron-right"></span></a>
        </div>

        
        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, tempora necessitatibus, beatae fugiat aspernatur sit pariatur deleniti excepturi molestias corrupti ad quaerat repudiandae minus cumque fuga facilis corporis iure cum!</p>
            <a href="#" class="btn">Tudj meg többet<span class="fas fa-chevron-right"></span></a>
        </div>
        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Szakértő orvosok</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, tempora necessitatibus, beatae fugiat aspernatur sit pariatur deleniti excepturi molestias corrupti ad quaerat repudiandae minus cumque fuga facilis corporis iure cum!</p>
            <a href="#" class="btn">Tudj meg többet<span class="fas fa-chevron-right"></span></a>
        </div>
    </div>
</section >

<section class="doctors" id="doctors">
    <h1 class="heading">our <span>Orvosok</span></h1> 
    <div class="box-container">
    <div class="box">
        <img src="" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>

        </div>
    </div>


    <div class="box">
        <img src="./doctor.jpg" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>
    
    <div class="box">
        <img src="" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <img src="" alt="">
        <h3>John Doe</h3>
        <span>Képzett orvos</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>
    </div>
</section>
<section class="appointment" id="appointment">
    <h1 class="heading">our <span>appointment</span>now</h1> 
    <div class="row">
        <div class="image">
            <img src="" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)){
                foreach($message as $message){
                echo'<p class="message">'.$message.'</p>';
            }
        }
        ?>

            <h3>Időpont kérés</h3>
            <input type="text" name="name" placeholder="Név..." class="box">
            <input type="number" name="number" placeholder="Telefon szám..." class="box">
            <input type="email" name="email" placeholder="E-amil cím..." class="box">
            <input type="date" name="date"  class="box">
            <input type="submit" name="submit" placeholder="Időpont kérés..." class="box">
        </form>
    </div>
    </section >
        
        <section class="review" id="review">
            <h1 class="heading">Ügyfelek<span>review</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="" alt="">
                <h3>Win coder</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aspernatur pariatur sapiente molestias sint placeat. Ab necessitatibus voluptas eligendi eum labore optio asperiores sunt doloribus qui possimus corrupti, quam distinctio.</p>
            </div>

            <div class="box">
                <img src="" alt="">
                <h3>Win coder</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aspernatur pariatur sapiente molestias sint placeat. Ab necessitatibus voluptas eligendi eum labore optio asperiores sunt doloribus qui possimus corrupti, quam distinctio.</p>
            </div>

            <div class="box">
                <img src="" alt="">
                <h3>Win coder</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa aspernatur pariatur sapiente molestias sint placeat. Ab necessitatibus voluptas eligendi eum labore optio asperiores sunt doloribus qui possimus corrupti, quam distinctio.</p>
            </div>
        </div>
    </section>

    <section  class="blogs" id="blogs">
        <h1 class="heading">our <span>blogs</span></h1> 
            <div class="box-container">
                <div class="box">
                    <div class="image">
                        <img src="" alt="">
                    </div>

                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class="fas fa-calendar"></i>2023 november 17</a>
                            <a href="#"><i class="fas fa-calendar"></i>by win coder</a>
                        </div>
                        <h3>Blog szöveg </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptas odio sapiente deserunt ipsa ducimus labore! Aliquam explicabo vitae ea tenetur consequatur expedita corrupti dicta necessitatibus, possimus quis adipisci rerum?</p>
                        <a href="#" class="btn">Tudj meg többet<span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class="fas fa-calendar"></i>2023 november 17</a>
                            <a href="#"><i class="fas fa-user"></i>by win coder</a>
                        </div>
                        <h3>Blog szöveg</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ex vitae ipsam architecto, alias provident officia nihil eius quod itaque accusamus obcaecati ab blanditiis rerum facere doloribus sint numquam qui!</p>
                        <a href="#" class="btn">tudj meg többet<span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
            

            <div class="box">
                <div class="image">
                    <img src="" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"><i class="fas fa-calendar"></i>2023 november 17</a>
                        <a href="#"><i class="fas fa-user"></i>by win coder</a>
                    </div>
                    <h3>Blog szöveg</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ex vitae ipsam architecto, alias provident officia nihil eius quod itaque accusamus obcaecati ab blanditiis rerum facere doloribus sint numquam qui!</p>
                    <a href="#" class="btn">tudj meg többet<span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"><i class="fas fa-calendar"></i>2023 november 17</a>
                        <a href="#"><i class="fas fa-user"></i>by win coder</a>
                    </div>
                    <h3>Blog szöveg</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ex vitae ipsam architecto, alias provident officia nihil eius quod itaque accusamus obcaecati ab blanditiis rerum facere doloribus sint numquam qui!</p>
                    <a href="#" class="btn">tudj meg többet<span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"><i class="fas fa-calendar"></i>2023 november 17</a>
                        <a href="#"><i class="fas fa-user"></i>by win coder</a>
                    </div>
                    <h3>Blog szöveg</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ex vitae ipsam architecto, alias provident officia nihil eius quod itaque accusamus obcaecati ab blanditiis rerum facere doloribus sint numquam qui!</p>
                    <a href="#" class="btn">tudj meg többet<span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>Gyors link</h3>
                <a href="#"><i class="fas fa-chevron-right">főoldal</i></a>
                <a href="#"><i class="fas fa-chevron-right">rólunk</i></a>
                <a href="#"><i class="fas fa-chevron-right">szolgáltatások</i></a>
                <a href="#"><i class="fas fa-chevron-right">orvosok</i></a>
                <a href="#"><i class="fas fa-chevron-right">időpont</i></a>
                <a href="#"><i class="fas fa-chevron-right">review</i></a>
                <a href="#"><i class="fas fa-chevron-right">blogs</i></a>
            </div>

            <div class="box">
                <h3>Szoltáltatásaink</h3>
                <a href="#"><i class="fas fa-chevron-right">fogászati</i></a>
                <a href="#"><i class="fas fa-chevron-right">masszőr</i></a>
                <a href="#"><i class="fas fa-chevron-right">kardiológia</i></a>
                <a href="#"><i class="fas fa-chevron-right">diagnózis</i></a>
                <a href="#"><i class="fas fa-chevron-right">ambulancia</i></a>
            </div>

            <div class="box">
                <h3>kövess minket</h3>
                <a href="#"><i class="fas fa-chevron-right">személyes időpont</i></a>
                <a href="#"><i class="fas fa-chevron-right">twitter</i></a>
                <a href="#"><i class="fas fa-chevron-right">twitter</i></a>
                <a href="#"><i class="fas fa-chevron-right">linkedin</i></a>
                <a href="#"><i class="fas fa-chevron-right">pinterest</i></a>
            </div>
        </div>

        <div class="credit">credit by <span>win coler</span> | all right reserved</div>
    </section>

    <script src="./js/script.js"></script>
</body>
</html>