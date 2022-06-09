<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
        $items = [
            'content' => '氏名',
            'email' => 'メールアドレス',
            'button' => '送信する'
        ];
        return view('index', $items);
    }
    public function store(PostRequest $request)
    {
        Post::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect()->route('post.index');
    }
    public function thanksindex()
    {
        return view('Thanks');
    }
}

