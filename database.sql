create database FitFeminine;


DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(1, 'gargi91', 'gargi.0901@gmail.com', 'abcde123', '2020-11-29 17:39:19', 'abc.jpg'),
(2, 'admin', 'Admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2020-11-29 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(3, 'user123', 'User123@gmail.com', '6ad14ba9986e3615423dfca256d04e3f', '2020-12-08 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(4, 'babu_bhaiya', 'Chaurasiashekhar098@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-12-12 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(5, 'sf', 'Afasga@gmailcom', '9613ed2252b4fc94dcdb934b305280b8', '2020-12-13 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(6, 'user456', 'User456@gmail.com', 'efd398f9c21a334f1c3940de1862d5e8', '2020-12-13 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(7, 'user678', 'User678@gmail.com', '80ec08504af83331911f5882349af59d', '2020-12-13 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(8, 'sneha', 'Sneha@gmail', 'f938bdfa0cb83169a0e30f53cf50b3ca', '2020-12-13 00:00:00', 'assets/images/profile-pics/head_emerald.png');
COMMIT;


---
---- creating browse table---
---


DROP TABLE IF EXISTS `browse`;
CREATE TABLE IF NOT EXISTS `browse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `artworkPath` varchar(500) NOT NULL,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;


--
-- Dumping data for table `browse`
--

INSERT INTO `browse` (`id`, `title`, `artworkPath` , `link`) VALUES
(1, 'Yoga', 'browse_img/yoga.jpg' , 'https://www.artofliving.org/in-en/yoga-for-women/yoga-women'),
(2, 'Workout','browse_img/workout.jpg' , 'https://www.womenshealthmag.com/fitness/a19039331/best-workout-for-body-type/'),
(3, 'Nutrition',  'browse_img/nutrition.jpg', 'https://www.eatright.org/food/nutrition/dietary-guidelines-and-myplate/healthy-eating-for-women#:~:text=Women%2C%20like%20men%2C%20should%20enjoy,woman'),
(4, 'Pregnancy', 'browse_img/pregnancy.jpg' , 'https://www.healthline.com/health/pregnancy');


---
--- Creating table magazines ---


DROP TABLE IF EXISTS `magazines`;
CREATE TABLE IF NOT EXISTS `magazines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `location` varchar(50) NOT NULL,
  `about` varchar(500) NOT NULL,
  `artworkPath` varchar(500) NOT NULL,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magazines`
--

INSERT INTO `magazines` (`id`, `title`, `location`, `about`, `artworkPath` , `link`) VALUES
(1, 'GLAMOUR UK', 'London, England, United Kingdom ', 'Welcome to Britain''s best women''s magazine. Get ready for insider fashion and beauty tips, amazing must-read features, and first-look celebrity news. Also get the fashion advice on highstreet and designer trends and buys from the experts.', 'browse_img/glamour.jpg' , 'https://www.glamourmagazine.co.uk/'),
(2, 'SHAPE', 'New York, United States','SHAPE Magazine offers the latest health, fitness, beauty and fashion news. You''ll find monthly strength and cardio workouts, strategies to help you eat right and motivational tips.' , 'browse_img/shape.jpg' , 'https://www.shape.com/'),
(3, 'COSMOPOLITAN', 'New York, NY' , 'Cosmopolitan is the best-selling young women''s magazine. Cosmopolitan delivers the latest news on men and love, work and money, fashion and beauty, health, self-improvement and entertainment. Your source for the latest sex tips, celebrity news, dating and relationship help, beauty tutorials, fashion trends, and more.', 'browse_img/cosmopolitan.jpg' , 'https://www.cosmopolitan.com/'),
(4, 'ALLURE', 'New York, United States', 'Allure is a women''s multimedia brand focused on beauty. Discover new hair ideas, makeup looks, skin-care advice, the best beauty products and tips, trends, and more from Allure, the first and only dedicated beauty magazine.', 'browse_img/allure.jpg' , 'https://www.allure.com/'),
(5, 'OXYGEN', 'Los Angeles, California, United States', 'Oxygen Magazine is the No. 1 trusted resource for information on training, nutrition, weight loss, health and fitness for women. Oxygen is designed to inform, educate and inspire women of all ages about the joys and benefits of fitness, proper nutrition, health and resistance training.', 'browse_img/oxygen.jpg' , 'https://www.oxygenmag.com/'),
(6, 'WOMEN FITNESS', 'United States', 'WomenFitness is an exhaustive resource on women health, weightloss, models, body building, recipes, workout, fitness tool, yoga, beauty, pregnancy, obesity.' , 'browse_img/women_fit.jpg' , 'https://www.womenfitness.org/');



DROP TABLE IF EXISTS `vaccines`;
CREATE TABLE IF NOT EXISTS `vaccines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `artwork` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;


INSERT INTO `vaccines` (`id`, `title`, `artwork` , `link`) VALUES
(1, 'Corona', 'browse_img/corona.jpg' , 'https://www.webmd.com/lung/coronavirus'),
(2, 'HPV','browse_img/hpv.jpg' , 'https://www.cdc.gov/std/hpv/stdfact-hpv-vaccine-young-women.htm'),
(3, 'Menopause',  'browse_img/menopause.jpg' , 'https://www.mayoclinic.org/diseases-conditions/menopause/symptoms-causes/syc-20353397'),
(4, 'Amnenorrhea', 'browse_img/amenorrhea.jpg' , 'https://www.mayoclinic.org/diseases-conditions/amenorrhea/symptoms-causes/syc-20369299');

