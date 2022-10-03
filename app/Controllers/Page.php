<?php

namespace App\Controllers;

class Page extends BaseController{
    public function about()
    {
        echo view("about");
    }

    public function contact()
    {
        $data['name']= "Tengku Surya";
        echo view("contact",$data);
    }

    public function faqs()
    {
        // Menambah data array (db)ke view
        $data['data_faqs'] = [
        [
            'question' => 'Apa itu Codeigniter?',
            'answer'    => 'Codeigneter adalah framework untuk membantu untuk membuat web'
        ],
        [
            'question' => 'Siapa yang membuat Codeigneter?',
            'answer'    => 'CI awalnya dibuat oleh Ellislab'
        ],
        [
            'question' => 'Codeigneter versi berapakah yang digunakaan ?',
            'answer'    => 'CI vesi 4'
        ],
    ];

        echo view ("Faqs",$data);
    }
    public function tos()
    {
        echo view("Halaman Term of Service");
    }
}