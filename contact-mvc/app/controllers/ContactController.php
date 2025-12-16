<?php
require_once '../app/models/Contact.php';

class ContactController {
    public function index() {
        $contactModel = new Contact();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $contactModel->store($_POST);
        }

        $contacts = $contactModel->all();
        require_once '../app/views/contact/index.php';
    }
}
