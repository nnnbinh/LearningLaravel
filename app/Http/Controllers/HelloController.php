<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index()
    {
        return view('example');
    }

    public function page1()
    {
        $type = "info";
        $message = "Hello World!";
        return view('page1', compact(['type', 'message']));
    }

    public function page2()
    {
        $features = array(
            array(
                "title" => "Tiêu đề 1",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "3.png"
            ),
            array(
                "title" => "Tiêu đề 2",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "1.png"
            ),
            array(
                "title" => "Tiêu đề 3",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "2.png"
            ),

        );

        return view('page2', compact("features"));
    }

    public function page3()
    {
        $items = array(
            array(
                "title" => "Tiêu đề 1",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "4.png"
            ),
            array(
                "title" => "Tiêu đề 2",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "5.png"
            ),
            array(
                "title" => "Tiêu đề 3",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "6.png"
            ),
            array(
                "title" => "Tiêu đề 4",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "7.png"
            ),
            array(
                "title" => "Tiêu đề 5",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "8.png"
            ),
            array(
                "title" => "Tiêu đề 6",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "9.png"
            ),
            array(
                "title" => "Tiêu đề 7",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "10.png"
            ),
            array(
                "title" => "Tiêu đề 8",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "11.png"
            ),
            array(
                "title" => "Tiêu đề 9",
                "describe" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis architecto animi, delectus expedita repellendus doloremque soluta corrupti, error laborum deleniti iusto veniam quam. Ratione sed illo doloribus deleniti, temporibus eius.",
                "img" => "12.png"
            ),

        );
        return view('page3',compact('items'));
    }
}
