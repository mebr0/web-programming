<!DOCTYPE html>
<html>
<head>
    <title>7sports - Fitness Club</title>
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/trainers.css">
</head>
<body>
	<header>
		<div class="header__text">
			7sports
		</div>

		<nav>
			<a href="index.php">HOME</a>
			<a href="photos.php">PHOTOS</a>
			<a href="schedule.php">SCHEDULE</a>
            <a href="trainers.php">TRAINERS</a>
			<a href="about.php">ABOUT</a>
		</nav>
    </header>
    
    <?php
        class Trainer {
            public $name;
            public $surname;
            public $age;
            public $phone;
            public $email;
            public $photo;

            function __construct($name, $surname, $age, $phone, $email, $photo) {
                $this->name = $name;
                $this->surname = $surname;
                $this->age = $age;
                $this->phone = $phone;
                $this->email = $email;
                $this->photo = $photo;
            }
        }

        $trainers = array(
            new Trainer("David", "Smith", 42, "+7 543 212 23 12", "qwe@gmail.com", "david.jpg"),
            new Trainer("Selina", "Stuart", 32, "+7 522 313 12 32", "qweqwe@gmail.com", "selina.jpg"),
            new Trainer("John", "Doe", 27, "+7 888 231 12 12", "qweasd@gmail.com", "john.jpg"),
            new Trainer("Jenifer", "Alex", 26, "+7 123 414 23 22", "jenifer@gmail.com", "jenifer.jpg"),
            new Trainer("Jecy", "Deoko", 38, "+7 999 999 99 99", "jecyj@gmail.com", "jecy.jpg")
        )
    ?>

	<div class="content">
        <h1>Our trainers!</h1>
        <div class="trainers">
            <?php
                foreach ($trainers as $index => $trainer) {
                    print "<div class=\"trainer\">";
                    print "<img src=\"static/trainers/" . $trainer->photo . "\">";
                    print "<div class=\"trainer_fullname\"><a href=\"trainer.php?id=" . $index . "\">" . $trainer->name . " " . $trainer->surname . "</a></div>";
                    print "</div>";
                }
            ?>
        </div>
	</div>

	<footer>
		<div class="footer__wrapper">
			<div class="footer_item about">
				<h3>About company</h3>
				<p>Praesent vel rutrum purus. Nam vel dui eu risus duis dignissim dignissim. 
					Suspen disse at eros tempus, congueconsequat.
				Praesent vel rutrum purus. Nam vel dui eu risus.</p>
			</div>
			<div class="footer_item twitter">
				<h3>Follow us on twitter</h3>
				<a href="https://twitter.com/?lang=en">our twitter account</a>
			</div>
			<div class="footer_item photos">
				<h3><a href="photos.php">Photos</a></h3>
				<div class="photos__wrapper">
					<div class="photos__wrapper__item">
						<img src="static/footer/1.jpg" alt="">
					</div>
					<div class="photos__wrapper__item">
						<img src="static/footer/2.jpg" alt="">
					</div>
					<div class="photos__wrapper__item">
						<img src="static/footer/3.jpg" alt="">
					</div>
					<div class="photos__wrapper__item">
						<img src="static/footer/4.jpeg" alt="">
					</div>
					<div class="photos__wrapper__item">
						<img src="static/footer/5.jpg" alt="">
					</div>
					<div class="photos__wrapper__item">
						<img src="static/footer/6.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="footer_item office">
				<h3>Office</h3>
				<ul>
					<li>44 New Design Street, rne 005</li>
					<li>01800433633</li>
					<li>info@7sports.com</li>
					<li>(123) 118 9999</li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>