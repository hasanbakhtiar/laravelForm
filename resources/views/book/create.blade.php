<style>
    .pass{
        border: 1px solid red
    }
</style>

{!!Form::open(['url'=>'book/add','method'=>'POST'])!!}
{!! Form::label('name',"Book name")!!}
{{-- {!! Form ::text('name',"asasd")!!} --}}
{{-- {!! Form ::text('name')!!} --}}
{{-- {!! Form ::password('password',['class'=>'pass'])!!} --}}
{{-- {!! Form ::checkbox('type','1')!!} --}}
{{-- {!! Form ::select('size',['L'=>'Large','S'=>'Small',],null,['placeholder'=>'sec'])!!} --}}
{{-- {!! Form ::select('animal',[
    'Cats'=>['lopard'=>'Leopard'],
    'Dogs'=>['cuki'=>'cuki'],
])!!} --}}
{{-- {!! Form ::selectRange('number',1,100)!!} --}}
{{-- {!! Form ::selectMonth('aylar')!!} --}}
{{-- {!! Form ::submit('send')!!} --}}



{!!Form::close()!!}




{{-- <form enctype="multipart/form-data" action={{route('book.add.post')}} method="POST">
    {{ csrf_field() }}
    Book image: <br>
    <input type="file" name="image"> <br>
    Add Book: <br>
    <input type="text" name="name" value="{{old('name')}}">
    <button type="submit">add</button>
</form> --}}