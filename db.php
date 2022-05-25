<?php

require_once __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie('https://pad.mymovies.it/filmclub/2002/05/021/locandina.jpg', 'Star Wars: Episodio I - La minaccia fantasma', '19 Maggio 1999', 'Fantascienza', 136),
    new Movie('https://upload.wikimedia.org/wikipedia/en/3/32/Star_Wars_-_Episode_II_Attack_of_the_Clones_%28movie_poster%29.jpg', 'Star Wars: Episodio II - L\'attacco dei cloni', '16 Maggio 2002', 'Fantascienza', 142),
    new Movie('https://pad.mymovies.it/filmclub/2005/05/014/locandina.jpg', 'Star Wars: Episodio III - La vendetta dei Sith', '19 Maggio 2005', 'Fantascienza', 140),
    new Movie('https://cornerhousepub.files.wordpress.com/2015/12/star-wars-episode-iv-a-new-hope-5229c37ae5338.jpg?w=723', 'Star Wars: Episodio IV - Una nuova speranza', '25 Maggio 1977', 'Fantascienza', 121),
    new Movie('https://slowfilm.files.wordpress.com/2016/04/star-wars-empire-strikes-back-poster.jpg', 'Star Wars: Episodio V - L\'impero colpisce ancora', '21 Maggio 1980', 'Fantascienza', 124),
    new Movie('https://upload.wikimedia.org/wikipedia/en/b/b2/ReturnOfTheJediPoster1983.jpg', 'Star Wars: Episodio VI - Il ritorno dello Jedi', '25 Maggio 1983', 'Fantascienza', 131),
    new Movie('https://m.media-amazon.com/images/I/71U+AlPz9DL._SL1419_.jpg', 'Star Wars: Episodio VII - Il risveglio della Forza', '18 Dicembre 2015', 'Fantascienza', 135),
    new Movie('https://pad.mymovies.it/filmclub/2012/11/107/locandina.jpg', 'Star Wars: Episodio VIII - Gli ultimi Jedi', '15 Dicembre 2017', 'Fantascienza', 152),
    new Movie('https://movieposterfactory.com/wp-content/uploads/2020/01/2019_SF_star_wars_episode_9_the_rise_of_skywalker_000_DS3_intl_style_resultat-600x887.jpg', 'Star Wars: Episodio IX - L\'ascesa di Skywalker', '18 Dicembre 2019', 'Fantascienza', 142),
];