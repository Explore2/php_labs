<?php
    require_once(__DIR__.'/User.php');
    require_once(__DIR__.'/Comment.php');
    require_once(__DIR__.'/vendor/autoload.php');
    $user1 = new User(0, "name1", "user1@yandex.ru", "1234dfad");
    $user2 = new User(1, "name2", "user2@yandex.ru", "1234dfad");
    $user3 = new User(2, "name3", "user3@yandex.ru", "1234dfad");
    $comment1 = new Comment($user1, "text from user1");
    $comment2 = new Comment($user2, "text from user2");
    $comment3 = new Comment($user3, "text from user3");
    
    echo $user1->getCreationDate()->format("Y-m-d H:i:s");
	echo "Hello from PHP";