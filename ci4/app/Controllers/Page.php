<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman Abot',
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
            halaman ini.'
        ]);
    }
    public function contact()
    {
        echo "ini adalah halaman kontak";
    }
    public function faqs()
    {
        echo "ini adalah halaman faqs";
    }
    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}
