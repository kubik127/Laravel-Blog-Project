<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Article;
use App\Models\Category;

class Home extends Controller
{
    public function index(){
      $data['articles']=Article::orderBy('created_at','DESC')->paginate(2);
      $data['articles']->withPath(url('sayfa'));
      $data['categories']=Category::InRandomOrder()->get();
      return view('front.home',$data);
    }

    public function single($category,$slug){
      $category=Category::whereSlug($category)->first() ?? abort(403,'Böyle bir sayfa bulunamadı');
      $article=Article::whereSlug($slug)->whereCategoryId($category->id)->first()??abort(403,'Böyle bir sayfa bulunamadı');
      $article->increment('hit');
      $data['article']=$article;
      $data['categories']=Category::InRandomOrder()->get();
      return view('front.single',$data);
    }

    public function category($slug){
      $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir sayfa bulunamadı');
      $data['category']=$category;
      $data['articles']=Article::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(1);
      $data['categories']=Category::InRandomOrder()->get();
      return view('front.category',$data);

    }
}
