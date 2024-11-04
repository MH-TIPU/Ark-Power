<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class NewsAndEvents extends Component
{
    use WithPagination;

    public $filter = 'all';

    public function setFilter($filter)
    {
        $this->filter = $filter;
        $this->resetPage(); // Reset to the first page when changing filters
    }

    public function getPostsProperty()
    {
        return match ($this->filter) {
            'news' => Post::where('category_id', 1)->paginate(4),  // Assuming '1' is the ID for News
            'events' => Post::where('category_id', 2)->paginate(4), // Assuming '2' is the ID for Events
            default => Post::paginate(4),
        };
    }

    public function render()
    {
        return view('livewire.news-and-events', [
            'posts' => $this->posts,
        ]);
    }
}
