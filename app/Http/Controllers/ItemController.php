<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $data = ["cat"=>Category::all(),"product"=>Item::all()];
        return view("home",$data);
    }
//Request is deppendancyinjector
    public function filter(Request $req, $id){
        return view("filter",["pro"=>Item::where("category_id",$id)->paginate(20)]);
    }


    public function view($itemId,$catId){
        return view("single",[
            "item"=>Item::find($itemId),
            "pro"=>Item::where("id","!=",$itemId)->where("category_id",$catId)->get()]);
    }

    public function search(Request $req){
        if ($req->search !=""):
            return view("filter",["pro"=>Item::where("pro_title","LIKE","%$req->search%")->paginate(25)]);
        else: 
            return redirect()->route("homepage");
        endif;
    }
    public function insert(Request $req ){

        if($req->method() =="POST"){
            $req->validate([
                'title'=>'required',
            ]);

        //insertion work
            $filename = $req->image->getClientOriginalName();
            $req->image->move(public_path("products"),$filename);

            $i = new item();
            $i->pro_title = $req->title;
            $i->price = $req->price;
            $i->seller_name = $req->seller_name;
            $i->seller_contact = $req->seller_contact;
            $i->category_id = $req->category;
            $i->address = $req->address;
            $i->city = $req->city;
            $i->seller_description = $req->description;
            $i->seller_image = $filename;
            $i->save();

            return redirect()->route("homepage");

        }

        return view("insertItem",[
            'cat'=>Category::all(),
            'main'=>Category::where("parent_id",0)->get()
        ]);
    }

    public function insertCat(Request $req){
        $req->validate([
            'title'=>'required',
        ]);

        $c = new Category();

        $c->title = $req->title;
        //$c->parent_id=1;
        $c->parent_id= $req->parent;

        $c->save();

        return redirect()->back();

    }

    public function register(Request $req){
        if($req->method()=="POST"): 
            $u = new User();

            $u->name = $req->name;
            $u->email = $req->email;
            $u->password =Hash::make($req->password);
            $u->save();

            return redirect()->route("login");

        endif;    

        return view("register");
    }

    public function login(Request$req){

        if($req->method()=="POST"):
            $user = User::where("email",$req->email)->first();

            
                echo"valid user";
                if(!$user || !Hash::check($req->password, $user->password)){
                   return "<script>alert('error : email or password incorrect')</script>";
                }
                else{

                    //storing session
                    $req->session()->put("login",$req->email);
                    //end

                    return redirect()->route('homepage');
                }

            
            

            

        endif; 

        return view("login");
    }

    public function logout(Request $req){
        $req->session()->flush();

        return redirect()->route("homepage");
    }
}
