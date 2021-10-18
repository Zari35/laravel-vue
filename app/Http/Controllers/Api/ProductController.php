<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Telegram;

/*
Telegram::sendMessage([
    "chat_id"=>env('TELEGRAM_CHAT_ID',''),
    "parse_mode"=>"HTML",
    "text"=>"spam ignore me"
]);*/


class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

  /*  public function teleUpdates(){
        $updates = Telegram::getUpdates();
        dd($updates);
    }*/
}
