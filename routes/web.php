<?php


// Route::get('/test', function () {



    // $collect = collect([
    //     ['product' => 'Desk'],
    //     ['product' => 'Chair']
    // ]);
    // $collect = collect([1,2,3,4,5])->max();
    // $collect = collect([1,2,3,4,5])->min();
    // dd($collect);
    // dd($collect->count());
    // $collect = collect(['name'=>'Desk','price'=>100]);
    // dd($collect->contains('Desk'));
    // $collection = collect(['Hasan Bakhtiar']);
    // $concated = $collection->concat(['Azer Seferov'])->concat(['Eldar Dadashov']);
    // dd($concated);
    //   $collection = collect(['name','age']);
    //   $combined = $collection->combine(['Hasan',25]);
    //   dd($combined);













    // $array = [1,2,3];
    // $collect = collect($array)->all();
    // print_r($collect);

    // $array = collect([
    //     // [1,2,3],
    //     // [4,5,6],
    //     // [7,8,9,10],
    //     // ['foo' => 10],
    //     // ['foo' => 20],
    //     // ['foo' => 30],
    //     // ['foo' => 40],
    // ])->collapse();
    // // ])->chunk('2');
    // // ])->avg('foo');
    // dd($array) ;
// });






















// Route::get('/book/add/{id}','bookController@create')->name('book.add');
// Route::get('/book/add','bookController@create')->name('book.add');
// Route::post('/book/add','bookController@store')->name('book.add.post');
// Route::get('/test',function(){
//     // echo url()->full();
//     // echo url()->current();
//     // echo url()->previous();
//     // echo route('book.add.post');
//     // echo route('book.add',['id'=>1]);
// });



// Route::get('/',function(){
    // return 'Hello';
    // return [1,2,3];
    // return response("Hello",200)->header('Content-type','text/plain');
    // return redirect('https://webluna.az');
    // return response()->json(['name'=>"Hasan",'surname'=>"Bakhtiar"]);
    // return response()->download('')->deleteFileAfterSend(true);
// });



// Route::get('/',function(){
    // return view('q');
    // $local = App::getLocale();
    // echo $local;
    // if (App::isLocale('az')) {
    //     echo 'az lang';
    // }else{
    //     echo 'en lang';
    // }
    // App::setlocale('en');
    // return view('q');
// });

// Route::post('/','qController@store');

// Route::get('/book/add','bookController@create');
// Route::post('/book/add','bookController@store')->name('book.add.post');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
    return view('welcome');

})->middleware(['AgeControl']);

Route::get('/age-control',function(){
    echo 'You are under 18 years old';
});