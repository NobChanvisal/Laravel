<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Route::get('/about', function (){
//     return 'This is about page';
// });

//grouping routes
Route::prefix('categories')->group(function() {
    Route::get('/laptop', function(){
        // return 'This is students details page';
        return view('category.laptop');
    });
    Route::get('/phone', function(){ 
        return 'This is phone page';
    });
});
// Route::prefix('page')->group(function() {
//     Route::get('/about', function (){
//         return view('about');
//     });
//     Route::get('/contact', function (){
//         return view('contact');
//     });
// });

//route parameters
Route::get('/user/{id}/{name}', function($id, $name){
   
    return 'This is user details page for user id: '.$id.' and name: '.$name;
});

//fallback route : use for error if no route is matched
Route::fallback(function() {
    return 'This route is not defined. 404 error';
});

Route::get('/about', function (){
    return view('about');
});
Route::get('/contact', function (){
    return view('contact');
});

//about passing data to view
$users = [
    ['id' => 1, 'name' => 'Jane Doe', 'role' => 'Admin'],
    ['id' => 2, 'name' => 'John Smith', 'role' => 'Editor'],
    ['id' => 3, 'name' => 'Alice Brown', 'role' => 'User']
];

Route::get('/user', function () use ($users) { // Use $users from the outer scope
    // $user = ['name'=>'John Doe', 'email'=>'johndoe@gmail.com'];
    // $users = [
    //     ['id' => 1, 'name' => 'Jane Doe', 'role' => 'Admin'],
    //     ['id' => 2, 'name' => 'John Smith', 'role' => 'Editor'],
    //     ['id' => 3, 'name' => 'Alice Brown', 'role' => 'User']
    // ];
    return view('user', ['Users'=>$users]);
});

Route::get('/user/{id}', function ($id) use ($users) {
    // return "This is user details page for user id: ".$id;
    // $users = [
    //     ['id' => 1, 'name' => 'Jane Doe', 'role' => 'Admin'],
    //     ['id' => 2, 'name' => 'John Smith', 'role' => 'Editor'],
    //     ['id' => 3, 'name' => 'Alice Brown', 'role' => 'User']
    // ];
    // Find user by ID
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            // return view('userdetails', ['user' => $user]);
            $foundUser = $user;
            break;
        }
    }
    if (!isset($foundUser)) {
        return "User not found";
    }
    $user = $foundUser; // Pass the found user to the view

    return view('userdetails', ['user' => $user]);
});