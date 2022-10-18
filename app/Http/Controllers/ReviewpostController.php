<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 問2：Reviewpostを読み込む
use App\Models\Reviewpost;

// 問2：同じクラス名は使えない．
class ReviewpostController extends Controller
{
    // このメソッドはいじらないでください。
    public function index(Reviewpost $reviewpost)
    {
        return $reviewpost->get();
    }

    // インスタンス変数名は$reviewpostではなく、$postにしてください。
    // 問2：同じメソッドは2回使えない．
    // 問2：Reviewpostのインスタンスを作成
    public function indexText(Reviewpost $post)
    {
        // 問2：postsフォルダではなく，testフォルダ
        // 問3：$postにget()をつける
        return view('test/index')->with(['posts' => $post->get()]);
    }
    
    // 問4
    // showTextメソッドを定義してbladeファイルにデータを渡しましょう。
    public function showText(Reviewpost $post)
    {
        return view('test/show')->with(['post' => $post]);
    }
}
