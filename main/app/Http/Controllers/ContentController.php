<?php

namespace App\Http\Controllers;

use App\Content;
use Auth;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function release_create()
    {
        $username = Auth::user()->name;
        return view('create', ['username' => "$username"]);
    }
    public function release_store(Request $request)
    {
        $content = new Content;
        $content->author = $request->author;
        $content->title = $request->title;
        $content->weights = $request->weights;
        $content->label = $request->label;
        $content->content = $request->content;
        $content->timestamp = time();
        $content->save();
    }

    public function content($first, $second = 0)
    {
        switch ($first) {
            case 0:return view('fenbu', ['title' => '第五音分部']);
            case 1:return view('youxi', ['title' => '游戏相关']);
            case 2:return view('donghua', ['title' => '动画图']);
            case 3:return view('xiaoshuo', ['title' => '小说&同人文']);
            case 4:return view('yinyue', ['title' => '音乐']);
            case 5:return view('zhoubian', ['title' => '周边']);
            case 6:if ($second == 0) {
                    return view('xiaoshuo', ['title' => '同人图']);
                }
                if ($second == 1) {
                    return view('ext/TR-01', ['title' => '"革命"']);
                }
                if ($second == 2) {
                    return view('ext/TR-02', ['title' => '颜语的橡皮章']);
                }
            case 7:return view('zatan', ['title' => '杂谈']);
        }

    }

}
