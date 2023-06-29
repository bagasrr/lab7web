<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('page/About',[
            'title' => 'Halaman About',
            'content' => 'Ini adalah about yang menjelaskan tentang halaman ini Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, explicabo.'
        ]);

    }
    public function contact()
    {
        return view('page/Contacts.php',[
            'title' => 'Halaman Contacts',
            'content' => 'Ini adalah Contacts yang menjelaskan tentang halaman ini Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, explicabo.'
        ]);
    }
    public function artikel()
    {
        return view('page/Artikel.php',[
            'title' => 'Artikel',
            'content' => 'Ini adalah Artikel yang menjelaskan tentang halaman ini Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, explicabo.'
        ]);
    }
}