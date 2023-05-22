<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi
            halaman ini.'
            ]);
    }

    public function contact()
    {
        echo "ini halaman contact";
    }

    public function faqs()
    {
        echo "ini halaman FAQ";
    }

    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}