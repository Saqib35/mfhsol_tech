<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;
use App\Models\Subscribers;
use App\Models\SubCategories;
use App\Models\Extra;
use App\Models\Blogs;
use Yajra\DataTables\DataTables;
use File;
require base_path('app/Http/index-api/vendors/autoload.php');
use Google;
use Google_Service_Indexing;
use Google_Service_Indexing_UrlNotification;
use Illuminate\Support\Facades\Validator;
use DB;

class AdminController extends Controller
{



    // add news
    public function AddNews(REQUEST $request)
    {
        $cate=Categories::get();
        $subcate=SubCategories::get();
        $extra=Extra::get();
        return view('admin.add-news',['cate'=>$cate,'subcate'=>$subcate,'extra'=>$extra]);
    }



    public function EditService(REQUEST $request)
    {
        $cate=Categories::get();
        $subcate=SubCategories::get();
        $extra=Extra::get();
        $news=News::where('id',$request->id)->first();
        
        return view('admin.add-news-edit',['cate'=>$cate,'subcate'=>$subcate,'extra'=>$extra,'news'=>$news]);
    }

    public function AddBlogs(REQUEST $request)
    {
        $cate=Categories::get();
        $subcate=SubCategories::get();
        return view('admin.add-blogs');
    }
    
     public function showNewsEditBlog(REQUEST $request)
    {
      
        $news=Blogs::where('id',$request->id)->first();
        return view('admin.add-blogs-edit',['news'=>$news]);
    }

    public function NewsEdit(REQUEST $request)
    {
       $cate=Categories::get();
       $subcate=SubCategories::get();
       $news=News::where('id',$request->id)->first();
       return view('admin.add-news-edit',['news'=>$news,'cate'=>$cate,'subcate'=>$subcate]);
    }
    
    public function showNewsEditBlogss(REQUEST $request)
    {
         $newId = $request->input('id'); // Assuming you have a scholarship ID to identify which record to update
    
    
    
    
        $news =Blogs::findOrFail($newId);
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        $news->meta_keywords = $request->meta_keywords;
        $news->news_title = $request->news_title;
        $news->short_description = $request->short_description;
        $news->alt_tag = $request->alt_tag;
        $news->content = $request->content;
        $news->slug = $request->slug;



        if($request->hasFile('new_thumbnail'))
        {
            
            $imagePath = public_path($request->oldimg);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }


            $dir =  public_path('category/');
            $dir1 = 'category/';            
            $extension = strtolower($request['new_thumbnail']->getClientOriginalExtension()); // get image extension
            $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
            $request['new_thumbnail']->move($dir, $fileName);
            $logos1 ="{$dir1}{$fileName}";
            $news->new_thumbnail = $logos1;        
        }
        $news->save();

        return redirect()->back()->with('success', 'Blogs Updated Successfully.');
   

     
    }
    
    
    public function showNewsEdit(REQUEST $request)
    {
        $newId = $request->input('id'); // Assuming you have a scholarship ID to identify which record to update
    
    
        $news = News::findOrFail($newId);
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        $news->meta_keywords = $request->meta_keywords;
        $news->news_title = $request->news_title;
        $news->short_description = $request->short_description;
        $news->alt_tag = $request->alt_tag;
        $news->content = $request->content;

        if($request->hasFile('new_thumbnail'))
        {
            
            $imagePath = public_path($request->oldimg);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }


            $dir =  public_path('category/');
            $dir1 = 'category/';            
            $extension = strtolower($request['new_thumbnail']->getClientOriginalExtension()); // get image extension
            $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
            $request['new_thumbnail']->move($dir, $fileName);
            $logos1 ="{$dir1}{$fileName}";
            $news->new_thumbnail = $logos1;        
        }
        $news->save();

        return redirect()->back()->with('success', 'Services Updated Successfully.');
   

       
    }
    public function showNews(REQUEST $request)
    {
        if (request()->ajax()) {
            $News = News::select('*');
            return DataTables::of($News)
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-danger" id="delDegree'.$row->id.'" onclick="delDegree('.$row->id.')"><i class="fa fa-trash"></i></button>
                <a href="'.url("panel/admin/edit/".$row->id).'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
            }) 
            ->editColumn('new_thumbnail', function ($row) {
                $logoUrl = asset($row->new_thumbnail);
                return '<img src="' . $logoUrl . '" alt="News" width="100px" height="100px">';
            })
            ->rawColumns(['new_thumbnail','action'])
            ->make(true);
        }

       return view('admin.show-news');

    }

    public function showBlogs(REQUEST $request)
    {
        if (request()->ajax()) {
            $News = Blogs::select('*');
            return DataTables::of($News)
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-danger" id="delDegree'.$row->id.'" onclick="delDegree('.$row->id.')"><i class="fa fa-trash"></i></button>
                <a href="'.url("panel/admin/edit/blog/".$row->id).'" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
            }) 
            ->editColumn('new_thumbnail', function ($row) {
                $logoUrl = asset($row->new_thumbnail);
                return '<img src="' . $logoUrl . '" alt="News" width="100px" height="100px">';
            })
            ->rawColumns(['new_thumbnail','action'])
            ->make(true);
        }

       return view('admin.show-blogs');

    }
    public function AddNewsDb(REQUEST $request)
    {



        $exists=DB::table('news')->where('category_slug', $request->category_slug)->exists();


        if ($exists) {
            return redirect()->back()->with('error', 'Already Added.');
        }

      
        $news = new News();
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        $news->meta_keywords = $request->meta_keywords;
        $news->news_title = $request->news_title;
        $news->slug = $request->slug;
        $news->category_slug = $request->category_slug;
        // $news->sub_cate_slug = $request->sub_cate_slug;
        $news->short_description = $request->short_description;
        $news->alt_tag = $request->alt_tag;
        $news->content = $request->content;
        // $news->extra_sub_cate_slug = $request->extra_sub_cate_slug;
        
        $logos1="";

        if($request->hasFile('new_thumbnail'))
        {
            $dir =  public_path('category/');
            $dir1 = 'category/';            
            $extension = strtolower($request['new_thumbnail']->getClientOriginalExtension()); // get image extension
            $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
            $request['new_thumbnail']->move($dir, $fileName);
            $logos1 ="{$dir1}{$fileName}";
            $news->new_thumbnail = $logos1;        
        }
        $news->save();



      

        return redirect()->back()->with('success', 'News Added Successfully.');

    }
    

    public function AddBlogsDb(REQUEST $request)
    {
        $news = new Blogs();
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        $news->meta_keywords = $request->meta_keywords;
        $news->news_title = $request->news_title;
        $news->slug = $request->slug;
        $news->short_description = $request->short_description;
        $news->alt_tag = $request->alt_tag;
        $news->content = $request->content;
     
        $logos1="";

        if($request->hasFile('new_thumbnail'))
        {
            $dir =  public_path('category/');
            $dir1 = 'category/';            
            $extension = strtolower($request['new_thumbnail']->getClientOriginalExtension()); // get image extension
            $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
            $request['new_thumbnail']->move($dir, $fileName);
            $logos1 ="{$dir1}{$fileName}";
            $news->new_thumbnail = $logos1;        
        }
        $news->save();

    

        return redirect()->back()->with('success', 'Blogs Added Successfully.');

    }


    public function IndexingApi(REQUEST $request){

        return view('admin.indexing-api');
    }

    public function SubmitURL(REQUEST $request)
    {
      
        try {
            $googleClient = new Google\Client();

            $googleClient->setAuthConfig(base_path('app/Http/index-api/service_account_key.json'));
            $googleClient->setScopes(Google_Service_Indexing::INDEXING);
            $googleIndexingService = new Google_Service_Indexing($googleClient);

         
            $urlNotification = new Google_Service_Indexing_UrlNotification([
                'url' =>  $request->url,
                'type' => 'URL_UPDATED'
            ]);

            $result = $googleIndexingService->urlNotifications->publish($urlNotification);

            if (isset($result->urlNotificationMetadata->latestUpdate["notifyTime"])) {
                 return redirect()->back()->with('success', 'URL submitted successfully.');
            
            } else {
                 return redirect()->back()->with('error', 'URL not  submitted successfully.');
            }

        } catch (\Exception $e) {
                return redirect()->back()->with('error', 'URL not  submitted successfully.');
        }

    }


    // add category
    public function AddCategory(REQUEST $request)
    {

        $categories = new Categories();
        // $categories->meta_title = $request->meta_title;
        // $categories->meta_description = $request->meta_description;
        // $categories->meta_keywords = $request->meta_keywords;
        $categories->category_name = $request->category_name;
        $categories->slug = $request->slug;
        // $categories->alt_tag = $request->alt_tag;
        
       
        // if($request->hasFile('category_img'))
        // {
        //     $dir =  public_path('category/');
        //     $dir1 = 'category/';            
        //     $extension = strtolower($request['category_img']->getClientOriginalExtension()); // get image extension
        //     $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
        //     $request['category_img']->move($dir, $fileName);
        //     $logos1 ="{$dir1}{$fileName}";
        //     $categories->category_img = $logos1;        
        // }
        $categories->save();

        return redirect()->back()->with('success', 'Category Added Successfully.');


    }


  

    // add sub category
    public function AddSubCategorys(REQUEST $request)
    {

        $sub_Categories = new SubCategories();
        // $sub_Categories->meta_title = $request->meta_title;
        // $sub_Categories->meta_description = $request->meta_description;
        // $sub_Categories->meta_keywords = $request->meta_keywords;
        $sub_Categories->category_slug = $request->category_slug;
        $sub_Categories->sub_cate_name = $request->sub_cate_name;
        $sub_Categories->slug = $request->slug;
        // $sub_Categories->alt_img = $request->alt_img;
        

        // if($request->hasFile('sub_cate_img'))
        // {
        //     $dir =  public_path('category/');
        //     $dir1 = 'category/';            
        //     $extension = strtolower($request['sub_cate_img']->getClientOriginalExtension()); // get image extension
        //     $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
        //     $request['sub_cate_img']->move($dir, $fileName);
        //     $logos1 ="{$dir1}{$fileName}";
        //     $sub_Categories->sub_cate_img = $logos1;        
        // }
        $sub_Categories->save();

        return redirect()->back()->with('success', 'Sub Category Added Successfully.');


    }

 // add sub category
 public function AddSubCategoryse(REQUEST $request)
 {

     $sub_Categories = new Extra();
    //  $sub_Categories->meta_title = $request->meta_title;
    //  $sub_Categories->meta_description = $request->meta_description;
    //  $sub_Categories->meta_keywords = $request->meta_keywords;
     $sub_Categories->category_slug = $request->category_slug;
     $sub_Categories->sub_cate_slug = $request->sub_cate_slug;
     $sub_Categories->extra_name = $request->sub_cate_name;
     $sub_Categories->slug = $request->slug;
    //  $sub_Categories->alt_img = $request->alt_img;
     

    //  if($request->hasFile('sub_cate_img'))
    //  {
    //      $dir =  public_path('category/');
    //      $dir1 = 'category/';            
    //      $extension = strtolower($request['sub_cate_img']->getClientOriginalExtension()); // get image extension
    //      $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
    //      $request['sub_cate_img']->move($dir, $fileName);
    //      $logos1 ="{$dir1}{$fileName}";
    //      $sub_Categories->extra_sub_cate_img = $logos1;        
    //  }

     $sub_Categories->save();

     return redirect()->back()->with('success', 'Extra Category Added Successfully.');


 }


   

    // show category
    

    public function showCategory()
    {
        
        if (request()->ajax()) {
            $Categories = Categories::select('*');
            return DataTables::of($Categories)
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-danger" id="delDegree'.$row->id.'" onclick="delDegree('.$row->id.')"><i class="fa fa-trash"></i></button>';
            }) 
            ->editColumn('category_img', function ($row) {
                $logoUrl = asset($row->category_img);
                return '<img src="' . $logoUrl . '" alt="category img" width="100px" height="100px">';
            })
            ->rawColumns(['category_img', 'action'])
            ->make(true);
        }

       return view('admin.show-category');

    }

    public function showSubCategory(REQUEST $request)
    {
        if (request()->ajax()) {
            $SubCategories = SubCategories::select('*');
            return DataTables::of($SubCategories)
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-danger" id="delDegree'.$row->id.'" onclick="delDegree('.$row->id.')"><i class="fa fa-trash"></i></button>';
            }) 
            ->editColumn('sub_cate_img', function ($row) {
                $logoUrl = asset($row->sub_cate_img);
                return '<img src="' . $logoUrl . '" alt="Subcategory img" width="100px" height="100px">';
            })
            ->rawColumns(['sub_cate_img','action'])
            ->make(true);
        }

       return view('admin.show-sub-category');

    }


    public function showSubCategorye(REQUEST $request)
    {
        if (request()->ajax()) {
            $SubCategories = Extra::select('*');
            return DataTables::of($SubCategories)
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-danger" id="delDegree'.$row->id.'" onclick="delDegree('.$row->id.')"><i class="fa fa-trash"></i></button>';
            }) 
            ->editColumn('extra_sub_cate_img', function ($row) {
                $logoUrl = asset($row->extra_sub_cate_img);
                return '<img src="' . $logoUrl . '" alt="Subcategory img" width="100px" height="100px">';
            })
            ->rawColumns(['extra_sub_cate_img','action'])
            ->make(true);
        }

       return view('admin.show-sub-categorye');

    }

    public function delDegree(REQUEST $request)
    {

        $degree = Categories::find($request->id);

        if ($degree) {
            $image = $degree->category_img;
           

            if ($image) {
                $imagePath = public_path($image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
               
            }
            $degree->delete();
            if (!$degree->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }

    }


    public function delNews(REQUEST $request)
    {

        $degree = News::find($request->id);

        if ($degree) {
            $image = $degree->category_img;
           

            if ($image) {
                $imagePath = public_path($image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
               
            }
            $degree->delete();
            if (!$degree->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }

    }


    public function delBlogs(REQUEST $request)
    {

        $degree = Blogs::find($request->id);

        if ($degree) {
            $image = $degree->category_img;
           

            if ($image) {
                $imagePath = public_path($image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
               
            }
            $degree->delete();
            if (!$degree->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        } else {
            return response()->json(['success' => false]);
        }

    }

    public function delSubCate(REQUEST $request)
    {

        $degree = SubCategories::find($request->id);

        if ($degree) {

            $image = $degree->sub_cate_img;
           

            if ($image) {
                $imagePath = public_path($image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
               
            }
            $degree->delete();
            if (!$degree->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }

        } else {
                return response()->json(['success' => false]);
        }

    }

    public function delSubCates(REQUEST $request)
    {

        $degree = Extra::find($request->id);

        if ($degree) {

            $image = $degree->sub_cate_img;
           

            if ($image) {
                $imagePath = public_path($image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
               
            }
            $degree->delete();
            if (!$degree->exists) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }

        } else {
                return response()->json(['success' => false]);
        }

    }



    
    public function upload(Request $request)
    {
     
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
           
            $request->file('upload')->move(public_path('images'), $fileName);
       
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
                  
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
           
        }
    }

    public function AddSubCategory(REQUEST $request)
    {
        $cate=Categories::get();
        return view('admin.add-sub-category',['cate'=>$cate]);
    }
    public function AddSubCategorye(REQUEST $request)
    {
        $cate=Categories::get();
         $subCategories=SubCategories::get();
        return view('admin.add-sub-categorye',['cate'=>$cate,'subCategories'=>$subCategories]);
    }
   

    public function fetchSubcate(Request $request)
    {
          
        $categorySlug = $request->input('category_slug');
        $subcategories = SubCategories::where('category_slug', $categorySlug)->get();

        return response()->json(['subcategories' => $subcategories]);

    }

    public function fetchSubcateExtra(Request $request)
    {
          
        $categorySlug = $request->input('category_slug');
        $subcategories = Extra::where('sub_cate_slug', $categorySlug)->get();

        return response()->json(['subcategories' => $subcategories]);

    }

   
}
