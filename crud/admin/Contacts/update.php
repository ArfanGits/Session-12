<?php

include_once($_SERVER['DOCUMENT_ROOT']."/batch1-arfan/crud/config.php");

use Bitm\Contact;

$_contact = new Contact();

$contact = $_contact->update();

?>


