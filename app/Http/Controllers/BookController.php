<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Flash;

use function PHPUnit\Framework\isNull;

class BookController extends Controller
{

    //display trang book.index
    public function index(){
        $ds = DB::table('tbbook')->get();

        return view("book.index",["books"=>$ds]);


    }
    public function getByPrice(Request $request){


        $from = $request['p1'];
        $to = $request['p2'];


        if($request['p1']=""){
                    $from =0;

                }
        if($request['p2']=""){
                    $to = PHP_INT_MAX;

                }

            // dd($from,$to);

        $ds = DB::table('tbbook')->whereBetween('price',[$from,$to])->get();

        $message = "Found {$ds->count()} result(s)";


        Session::flash('message', $message);
        Session::flash('alert-class','alert-danger');
        return view("book.index",["books"=>$ds]);


    }

    public function create(){
        return view("book.create");
    }

    public function createPost(Request $request) {
        // lay du lieu tren form create book
        $name = $request["name"];
        $author = $request["author"];
        $price = floatval($request["price"]);

        DB::table("tbbook")->insert(["name"=>$name,"author"=>$author,"price"=>$price]);

        return redirect()->action([BookController::class,"index"]);

    }
    public function update($ms){
        $b = DB::table('tbbook')->where("code",$ms)->first();

        return view("book.update",['book'=>$b]);

    }
    public function updateSave(Request $request){
         // lay du lieu tren form update book
         $code = $request['code'];
         $name = $request["name"];
         $author = $request["author"];
         $price = floatval($request["price"]);

         DB::table("tbbook")->where("code",$code)->update([
            "name"=>$name,
            "price"=>$price,
            "author"=>$author

         ]);

         //sau khi thuc hien xong quay tro lai trang index
         return redirect()->action([BookController::class,"index"]);



    }




    public function delete($id){
        DB::table('tbbook')->where("code",$id)->delete();

        return redirect()->action([BookController::class,"index"]);


    }


}
