<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cd;
class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
 
    public function index()
    {
        $books = Book::all();
        $cds= Cd::all();

        $countbook = count($books); 
        $countcd = count($cds); 
        return view('user.home' , compact('books', 'cds','countbook', 'countcd'));
    }

    



    public function create(Request $data)
    {
        // request()->validate([
        //         'title'=>'required',
        //         'fname'=>'required',
        //         'sname'=>'required',
        //         'play_length'=>'required',
        //         'pages'=>'required',
        //         'price'=>'required'
        //     ]);

        if ($data['producttype'] == 'cd'){
            Cd::create([
                'title' => $data['title'], 
                'fname' => $data['fname'], 
                'sname'=> $data['sname'], 
                'play_length'=> $data['pages/play_length'], 
                'price'=> $data['price']
            ]
            );
        }

        else {
            Book::create([
                'title' => $data['title'], 
                'fname' => $data['fname'], 
                'sname'=> $data['sname'], 
                'pages'=> $data['pages/play_length'], 
                'price'=> $data['price']
            ]
            ) ;
        }
        
        return redirect ('/home');
       
    }

  
    public function editbook($id)
    {
        $data = Book::where('id',$id)->first();
        return view('user/user_edit', compact('data'));
    
    }

    public function editcd($id){
        $data = Cd::where('id',$id)->first();
        $data->pages=$data->play_length;
        return view('user/useredit', compact('data'));

    }


}