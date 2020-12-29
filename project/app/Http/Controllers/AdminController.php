<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Cd;

class AdminController extends Controller
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
        return view('admin/handleAdmin' , compact('books', 'cds','countbook', 'countcd'));
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
        
        return redirect ('admin/home');

    }

     
    public function editbook($id)
    {
        $data = Book::where('id',$id)->first();
        return view('admin/admin_editbook', compact('data'));
    
    }

    public function editcd($id){
        $data = Cd::where('id',$id)->first();
        $data->pages=$data->play_length;
        return view('admin/admin_editcd', compact('data'));

    }

    public function updatebook(Request $data, $id){
        Book::where('id', $id ) -> update(
            [
                'title' => $data['title'], 
                'fname' => $data['fname'], 
                'sname'=> $data['sname'], 
                'pages'=> $data['pages/play_length'], 
                'price'=> $data['price']
            ]       
        );
        return redirect ('admin/home');
    }  

    public function updatecd(Request $data, $id){
        Cd::where('id', $id ) -> update(
            [
                'title' => $data['title'], 
                'fname' => $data['fname'], 
                'sname'=> $data['sname'], 
                'play_length'=> $data['pages/play_length'], 
                'price'=> $data['price']
            ]       
        );
        return redirect ('admin/home');
    }
    
 
    public function destroybook($id)
    {
        Book::where('id',$id)->delete();
        return redirect ('admin/home');
    }
    
    public function destroycd($id)
    {
        Cd::where('id', $id ) -> delete();  
        return redirect ('admin/home');
 

    }

    

}
