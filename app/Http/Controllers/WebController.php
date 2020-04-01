<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use CoffeeCode\Optimizer\Optimizer;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'A escola eleita a melhor do Brasil com reconhecimento em mais de 17 países pela Latin American Quality Institute',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.home', [
            'head' => $head
        ]);
    }

    public function course()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Sobre o curso',
            'Um treinamento completo do zero ao developer com Laravel para você aprender e se especializar no Framework PHP mais utilizado do mundo e abrir as portas de um mercado repleto de oportunidades!',
            route('course'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.course', ['head' => $head]);
    }

    public function blog()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'A escola eleita a melhor do Brasil com reconhecimento em mais de 17 países pela Latin American Quality Institute',
            route('blog'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.blog', ['head' => $head]);
    }

    public function article()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'A escola eleita a melhor do Brasil com reconhecimento em mais de 17 países pela Latin American Quality Institute',
            route('article'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.article', ['head' => $head]);
    }

    public function contact()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'A escola eleita a melhor do Brasil com reconhecimento em mais de 17 países pela Latin American Quality Institute',
            route('contact'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.contact', ['head' => $head]);
    }
}
