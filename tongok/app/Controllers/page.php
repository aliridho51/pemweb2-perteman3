<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "Halaman Term of Service";
    }

    public function biodata()
    {
        echo "<br> Nama : Rifqy Ali Ridho.";
        echo "<br> NIM : 4122040";
        echo "<br> Alamat : Rembang Sarang Kalipang";
    }
}
