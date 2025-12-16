<?php

class Contact {
    private $file = '../data/contacts.json';
    // thuộc tính $file được khai báo là private để đảm bảo tính đóng gói, tránh bị truy cập và chỉnh sửa từ bên ngoài lớp Model.
    
    public function all() {
        if (!file_exists($this->file)) {
            return [];
        }
        return json_decode(file_get_contents($this->file), true) ?? [];
    }

    public function store($data) {
        $contacts = $this->all();

        $contacts[] = [
            'name'  => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone']
        ];

        file_put_contents(
            $this->file,
            json_encode($contacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );
    }
}
