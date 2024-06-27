<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Categories;
use App\Models\Blog;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function product(){
        $products = Product::paginate(20);
        return view("product",compact("products"));
    }
    public function blog_home()
    {
          $blogs = Blog::paginate(5); 
    $chunks = Product::latest()->limit(25)->get();

        return view('blog', compact('blogs', 'chunks'));
    }
    
public function blog_show($title) {

    $decodedTitle = str_replace('-', ' ', $title);
    $blog = Blog::where('title', $decodedTitle)->firstOrFail();
     $chunks = Product::latest()->limit(25)->get();
    return view('blog_details', compact('blog','chunks'));
}
   public function  categories(){
    $categories = Categories::latest()->get();
    return view('categories', compact('categories'));
   }
}
