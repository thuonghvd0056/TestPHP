<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 7/14/18
 * Time: 8:32 AM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function list(){
        $foods = DB::select('select * from foods');
        return view('product.list') -> with('foods', $foods);
    }

    function create()
    {
        return view('product.form');
    }

    function store(Request $request)
    {
        $name = $request -> input('name');
        $description = $request -> input('description');
        $price = $request -> input('price');
        $thumbnail = $request -> input('thumbnail');
        $categoryId = $request -> input('categoryId');
        $query = 'insert into foods (title, description, price, thumbnail, categoryId)'
                . ' values ("' . $name . '", "'. $description .'", '. $price.', "' . $thumbnail. '", ' . $categoryId .')';
        DB::insert($query);
        return view('success') -> with('name', $request -> input('name'));
    }
}