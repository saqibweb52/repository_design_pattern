<?php

namespace App\Repo;

use App\Models\Student;

class UserRepo implements UserInterface {

public function all(){

   return Student::all();

}

public function create(array $data){

 return Student::create([
   
   'name'=>$data['name'],
   'email'=>$data['email'],
   'password'=>$data['password']

   
  ]);

}

public function showid(int $id){
   return Student::find($id);
}

public function update($id, array $data){

   return Student::find($id)->update([
   
         'name'=>$data['name'],
         'email'=>$data['email'],
         'password'=>$data['password']
      
         
        ]);
}

public function delete($id){

   return Student::destroy($id);
}

}