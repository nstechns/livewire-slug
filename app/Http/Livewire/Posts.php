<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Component;

class Posts extends Component
{
    public $title;
    public $slug;

    public $defaultLayout = "tailwind";

    protected $rules = [
        'title'=>'required',
        'slug'=>'required',
    ];

    public function render()
    {
        $posts = Post::take(10)->latest()->get();
        return view("livewire.{$this->defaultLayout}.posts",compact('posts'));
    }

    public function updatedTitle(){
        $this->slug = SlugService::createSlug(Post::class, 'slug', $this->title);
    }

    public function savePost()
    {
       $this->validate();

        Post::create([
            'title'=>$this->title,
            'slug'=> $this->slug
        ]);
        $this->reset('title','slug');
    }
}
