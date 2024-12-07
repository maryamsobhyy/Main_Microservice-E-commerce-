<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProductCreated implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $data;

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    public function handle(): void
    {
        Product::create([
            'id' =>$this->data['id'],
            'title' =>$this->data['title'],
            'images' =>$this->data['images'],
            'likes' =>$this->data['likes'],
            'created_at' =>$this->data['created_at'],
            'updated_at' =>$this->data['updated_at'],
        ]);
    }
}
