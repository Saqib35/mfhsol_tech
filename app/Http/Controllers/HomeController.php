<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;
use App\Models\Subscribers;
use App\Models\SubCategories;
use App\Models\Extra;
use App\Models\Blogs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function serviceDeatils(REQUEST $request)
    {

       $cate=Categories::where('slug',$request->slug)->get();

       if(count($cate))
       {
          $news=News::where('category_slug',$request->slug)->first();
           if($news!="")
           {
           return view('service-details',['service'=>$news]);
           }else{
            abort(404);
           }

        }else{
          
         // now check in subcategories table        
         $Subcate=SubCategories::where('slug',$request->slug)->get();
        
         if(count($Subcate))
         {
            $news=News::where('category_slug',$request->slug)->first();
            if($news!="")
           {
           return view('service-details',['service'=>$news]);
           }else{
            abort(404);
           }
           

         }else{

            // now check in subcategories table        
             $SubcateExtra=Extra::where('slug',$request->slug)->get();
             $news=News::where('category_slug',$request->slug)->first();
             if(count($SubcateExtra))
             {
                if($news!="")
                {
                return view('service-details',['service'=>$news]);
                }else{
                    abort(404);
                }
                
                
             }else{
                 
               return abort('404');

             }     
         }  
       }
    }


    public function blogDeatils(REQUEST $request)
    {

        $blogs=Blogs::paginate(10);
        return view('blog',['blogs'=> $blogs]);

    }

    public function blogDeatiss(REQUEST $request)
    {

        $blogs=Blogs::where('slug',$request->slug)->first();
        if(!empty($blogs))
        {
          return view('blog-single',['blogs'=>$blogs]);
        }else{
           return abort(404);
        }
    }
    
}
