<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->limit(3)->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'A escola eleita a melhor do Brasil com reconhecimento em mais de 17 países pela Latin American Quality Institute',
            url('/'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.home', [
            'head' => $head,
            'posts' => $posts
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

        return view('front.course', [
            'head' => $head
        ]);
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        $head = $this->seo->render(
            env('APP_NAME') . ' - UpInside Treinamentos',
            'A escola eleita a melhor do Brasil com reconhecimento em mais de 17 países pela Latin American Quality Institute',
            route('blog'),
            asset('images/img_bg_1.jpg')
        );

        return view('front.blog', [
            'head' => $head,
            'posts' => $posts
        ]);
    }

    public function article($uri)
    {
        $post = Post::where('uri', $uri)->first();

        $head = $this->seo->render(
            env('APP_NAME') . ' - ' . $post->title,
            $post->subtitle,
            route('article', ['uri' => $post->uri]),
            asset(\Illuminate\Support\Facades\Storage::url(\App\Support\Cropper::thumb($post->cover, 1200, 628)))
        );

        return view('front.article', [
            'head' => $head,
            'post' => $post
        ]);
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
