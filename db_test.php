
<?php
// namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Controller;
//
// class UserController extends Controller
// {
//     /**
//      * 顯示所有應用程式的使用者清單。
//      *
//      * @return Response
//      */
//     public function index()
//     {
//         $users = DB::select('select * from users where active = ?', [1]);
//         return view('user.index', ['users' => $users]);
//     }
// }
//
// foreach ($users as $user) {
//     echo $user->name;
// }
//
//
// $results = DB::select('select * from users where id = :id', ['id' => 1]);
//
// DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
//
// $affected = DB::update('update users set votes = 100 where name = ?', ['John']);
//
// #$deleted = DB::delete('delete from users');

#require "app\Models\Product.php";
require 'vendor/autoload.php';
use App\Models\Product;
$products = App\Models\Product::all();
foreach ($products as $product) {
    echo $products->name;
}
