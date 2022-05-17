{{__('helper.welcome',['name'=>'Hasan'])}}
@lang('helper.welcome',['name'=>'Hasan'])
<form action="http://localhost/Lessons/laravelForm/public/" method="POST">
    {{ csrf_field() }}
<input type="text" name="name">
@if ($errors->first('name'))
    {{$errors->first('name')}}
@endif

<input type="text" name="email">
@if ($errors->first('email'))
    {{$errors->first('email')}}
@endif
<button>send</button>
</form>
{{-- @if ($errors->any())
    @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
    @endforeach
@endif --}}