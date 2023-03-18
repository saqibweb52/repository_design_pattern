<?php

namespace App\Http\Controllers;
use App\Repo\UserInterface;
use Illuminate\Http\Request;

class RDPController extends Controller
{
 
  public $user;
function __construct(UserInterface $UserInterface){

  $this->user = $UserInterface;

}


    public function index(){
       $students = $this->user->all();
       
       return response()->json($students);
      // return view('insert',['students'=>$students]);
    }

    public function create(Request $request){

   $students = $this->user->create($request->all());
    return response()->json($students);
   // return redirect(route('index'));

    }


    public function findbyid($id){

        $student = $this->user->showid($id);
        return response()->json($student);
       // return view('insert',['stu'=>$student]);
        }

        public function update(Request $request, $id){

          $student = $this->user->update($id, $request->all());
            return response()->json(['status'=>'updated']);
           // return redirect(route('index'));
        
            }

            public function delete($id){

                $students = $this->user->delete($id);
               
               // return redirect(route('index'));
                return response()->json($students);
                }
}
