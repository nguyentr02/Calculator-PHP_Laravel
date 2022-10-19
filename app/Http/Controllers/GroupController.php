<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class GroupController extends Controller{
        public function user1(){
            echo "User1";
        }
        public function user2(){
            echo "User2";
        }
        public function user3(){
            echo "User3";
        }

        public function getIndex(){
            $name = 'Nguyen';
            $age = 20;
            $class = '20CSE';
            $arr = [
                ['name' => $name,'age' => $age, 'class' => $class],
                ['name'=>'Hieu','age' => $age, 'class' => $class]
        
        ];
            return view('welcome')->with('student',$arr);
        }
    }
