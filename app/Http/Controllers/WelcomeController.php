<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home(){
        return '<a href="https://www.educastudio.com/">https://www.educastudio.com/</a>';
    }
    public function ct1(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>';
    }
    public function ct2(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a>';
    }
    public function ct3(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a>';
    }
    public function ct4(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
    }
    public function news(){
        return '<a href="https://www.educastudio.com/news">https://www.educastudio.com/news</a>';
    }
    public function newstext($text){
        return '<a href="https://www.educastudio.com/news/'.$text.'">https://www.educastudio.com/news/'.$text.'</a>';
    }
    public function pro1(){
        return '<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>';
    }
    public function pro2(){
        return '<a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a>';
    }
    public function pro3(){
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
    }

}
