<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell_part1', 'tell_part2', 'tell_part3', 'address', 'building', 'detail']);
        $request->session()->put('selectedCategory', $request->input('content'));
        $category_id = $request->session()->get('selectedCategory');
        return view('confirm', compact('contact', 'category_id'));
    }

//     public function confirm(ContactRequest $request)
// {
//     $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell_part1', 'tell_part2', 'tell_part3', 'address', 'building', 'detail']);
//     $categoryId = $request->input('category');
//     $category = Category::find($categoryId);
//     $contact['category_content'] = $category->content;
//     return view('confirm', compact('content'));
// }

    public function thanks(Request $request)
    {
        $contact = $request->all();
        Contact::create($contact);
        return view('/thanks');
    }

    public function register()
    {
        return view('/register');
    }

    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        return view('admin');
    }
}
