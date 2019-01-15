<?php 

class PagesController 
{
    public function home(){
        require 'Task.php';
        $tasks = App::get('database')->selectAll('todos');
        return view('index', compact('users', 'tasks'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
       return view('contact');
    }
}