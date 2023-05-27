<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('About.php',[
            'title' => 'Halaman About',
            'content' => 'Ini adalah about yang menjelaskan tentang halaman ini Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, explicabo.'
        ]);
    }
    public function contact()
    {
        return view('Contacts.php',[
            'title' => 'Halaman Contacts',
            'content' => 'Ini adalah Contacts yang menjelaskan tentang halaman ini Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, explicabo.'
        ]);
    }
    public function faqs()
    {
        return view('Faqs.php',[
            'title' => 'Halaman FaQs',
            'content' => 'Ini adalah FaQs yang menjelaskan tentang halaman ini Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, explicabo.'
        ]);
    }
}