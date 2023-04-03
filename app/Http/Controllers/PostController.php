<?php
namespace App\Http\Controllers;
//use宣⾔は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(Post $post){//インポートしたPostをインスタンス化して$postとして使⽤。
        return $post->get();//$postの中⾝を戻り値にする。
    }

}

