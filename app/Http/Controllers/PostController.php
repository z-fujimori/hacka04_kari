<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{

    public function post(Post $post){//インポートしたPostをインスタンス化して$postとして使⽤。
        return $post->get();//$postの中⾝を戻り値にする。
    }

    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
        //blade内で使う変数'posts'と設定。'posts'の中⾝にgetを使い、インスタンス化した$postを代⼊。
    }
}
?>