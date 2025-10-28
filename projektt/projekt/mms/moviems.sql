CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  surname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  confirm_password VARCHAR(255) NOT NULL,
  i_admin VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE movies (
  id INT(11) NOT NULL AUTO_INCREMENT,
  movie_name VARCHAR(255) NOT NULL,
  movie_desc VARCHAR(255) NOT NULL,
  movie_quality VARCHAR(255) NOT NULL,
  movie_rating INT(11) NOT NULL,
  movie_image VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE bookings (
  id INT(11) NOT NULL AUTO_INCREMENT,
  user_id INT(11) NOT NULL,
  movie_id INT(11) NOT NULL,
  nr_days INT(11) NOT NULL,
  price VARCHAR(255) NOT NULL,
  date VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (movie_id) REFERENCES movies(id)
);


INSERT INTO `users` (`id`, `name`, `surname`, `username`, `email`, `password`,`confirm_password`,`is_admin`) VALUES
(1, 'John', 'Doe', 'johndoe', 'johndoe@mail.com', '123456789','123456789','1'),
(2, 'Jane', 'Doe', 'janedoe', 'janedoe@mail.com', '123456789','123456789','0');

INSERT INTO `movies` (`id`, `movie_name`, `movie_desc`, `movie_quality`, `movie_rating`, `movie_image`) VALUES
(1, 'Zgjoi', 'Hoping to provide for their families, struggling widows start a business to sell a local food product. Together, they find healing and solace in the new venture, but their will to live independently is soon met with hostility.', '3D', 10, 'zgjoi.jpg'),
(2, 'Fast and Furious', 'Fast & Furious is a media franchise centered on a series of action films that are largely concerned with illegal street racing, heists, spies and family. The franchise also includes short films, a television series, live shows, video games and theme park ', '2D', 7, 'fastandfurious.jpg'),
(3, 'VENOM', 'Journalist Eddie Brock is trying to take down Carlton Drake, the notorious and brilliant founder of the Life Foundation. While investigating one of Drake\'s experiments, Eddie\'s body merges with the alien Venom -- leaving him with superhuman strength and p', '6D', 7, 'venom.png');

INSERT INTO `bookings` (`id`, `user_id`, `movie_id`, `nr_tickets`, `date`, `is_approved`, `time`) VALUES
(3, 2, 1, 2, '2022-12-16', 'true', '19:00');