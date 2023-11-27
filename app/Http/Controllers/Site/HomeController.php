<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


use App\Http\Requests\ContactRequest;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Offer;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Review;
use App\Models\Slider;
use App\Models\Sponsors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::latest()->limit(10)->get();
        $categories = DB::table('categories')->inRandomOrder()->limit(12)->get();
        $products = Product::latest()->limit(4)->get();
        $sponsors = DB::table('sponsors')->inRandomOrder()->limit(6)->get();
        $offer = Offer::first();
        $latestProducts = DB::table('products')->inRandomOrder()->limit(4)->get();;

        return view('Site.index', compact('sliders', 'products', 'sponsors', 'categories','offer','latestProducts'));

    }

    public function contact()
    {
        return view('Site.contact');
    }

    public function ContactUs(ContactRequest $request){
        $data = $request->validated();
        Contact::create($data);
        return redirect()->back()->with('success', 'تم إرسال الرسالة بنجاح! شكرًا لتواصلك معنا.');
    }

    public function about( )
    {
        $about = About::first();
        $reviews = Review::latest()->limit(5)->get();
        $sponsors = Sponsors::latest()->get();
        $products = DB::table('products')->inRandomOrder()->limit(4)->get();;

        return view('Site/about', compact('reviews', 'sponsors', 'about','products'));

    }

    public function singleProduct($id)
    {
        $categories = Category::latest()->get();
        $product = Product::with('images')->findOrFail($id);
        $reviews = Review::latest()->limit(5)->get();

        $RelatedProducts = DB::table('products')->inRandomOrder()->limit(4)->get();;

        return view('Site/single_product', compact('product', 'categories','RelatedProducts','reviews'));

    }

    public function shop(Request $request)
    {
//        $products = Product::latest()->paginate(9);
        $BestSeller = DB::table('products')->inRandomOrder()->limit(4)->get();;

        $categories = Category::latest()->get();
        $selected_category = null;

        if ($request->has('category') && $request->category != 'all') {
            $selected_category = Category::where('category_name', $request->category)->firstOrFail();
            $products = Product::latest()->where('category_id', $selected_category->id)->paginate(9);

        } else
            $products = Product::latest()->paginate(9);

        return view('Site.shop', compact('products', 'categories', 'selected_category','BestSeller'));
    }

    public function getCategory($id)
    {
        $categories = Category::latest()->get();
        $selected_category = Category::where('id', $id)->firstOrFail();
        $products = Product::latest()->where('category_id', $id)->paginate(9);
        $BestSeller = DB::table('products')->inRandomOrder()->limit(4)->get();;


        return view('Site.shop', compact('products', 'categories', 'selected_category','BestSeller'));
    }


}
