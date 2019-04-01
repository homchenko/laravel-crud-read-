<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function feedback() {
        return view('feedback');
    }

    public function sendmail(Request $request) {

//        Product::create($request->all());
//        $feedback = [];
//        $feedback['name'] = $request->input('name');
//        $feedback['content'] = $request->input('content');
        $product = new Product();
        $product->title = $request->input('name');
        $product->content = $request->input('content');
        $product->price = $request->input('price');
        $product->save();

//        Mail::to('alex@rambler.ru')->send(new FeedbackMail($feedback));

        return response()->json([
            'msg' => 'Продукт создан',
        ]);
    }
}
