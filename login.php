<?php

    $INCOMING_USER = $_GET['uname'];
    $INCOMING_PASSWD = $_GET['passwd'];

    if ($INCOMING_USER == 'zanerocks14' && $INCOMING_PASSWD == 'superhackblood123'
    || $INCOMING_USER == 'jess<3' && $INCOMING_PASSWD == '1234512345'
    || $INCOMING_USER == '123' && $INCOMING_PASSWD == '123') {
        echo "Welcome Slayer" .$INCOMING_USER;
        sleep(2);
        header("Location: les1.html")
        die();
    } else {
        echo "Numnuts!!!!1111 cant hack me pscyko lozer bwl";
        sleep(2);
        header("Location: epic.html")
        die();
    }

?>
