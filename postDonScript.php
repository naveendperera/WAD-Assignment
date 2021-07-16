<?php
    $donation_type_id = filter_input(INPUT_POST,'donation_type');
    $donation_title = filter_input(INPUT_POST,'donation_title');
    $donation_desc = filter_input(INPUT_POST,'donation_desc');
    $donation_fname = filter_input(INPUT_POST,'donation_fname');
    $donation_lname = filter_input(INPUT_POST,'donation_lname');
    $donation_address = filter_input(INPUT_POST,'donation_address');
    $donation_city = filter_input(INPUT_POST,'donation_city');
    $donation_province_id = filter_input(INPUT_POST,'donation_province');
    $donation_telephone = filter_input(INPUT_POST,'donation_telephone');

    require('./database_post_don.php');

    $query = "insert into donations (donation_type_id, donation_title, donation_desc, donation_fname, donation_lname, donation_address, donation_city, donation_province_id, donation_telephone) values (:don_type_id, :don_title, :don_desc, :don_fname, :don_lname, :don_address, :don_city, :don_province_id, :don_tele);";
    $statement = $db->prepare($query);
    $statement->bindValue(':don_type_id', $donation_type_id);
    $statement->bindValue(':don_title', $donation_title);
    $statement->bindValue(':don_desc', $donation_desc);
    $statement->bindValue(':don_fname', $donation_fname);
    $statement->bindValue(':don_lname', $donation_lname);
    $statement->bindValue(':don_address', $donation_address);
    $statement->bindValue(':don_city', $donation_city);
    $statement->bindValue(':don_province_id', $donation_province_id);
    $statement->bindValue(':don_tele', $donation_telephone);
    $statement->execute();
    $statement->closeCursor();

    header('Location: ./Service.php');
?>