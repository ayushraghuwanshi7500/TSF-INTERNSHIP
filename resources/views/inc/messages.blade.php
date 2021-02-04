@if(count($errors) > 0)
@foreach($errors->all() as $errors)
<div class="alert alert-danger">
    {{$errors}}
</div>
@endforeach
@endif
@if(session('success'))
<div class="alert alert-success">
    <h6>{{session('success')}}</h6>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    <h6>{{session('error')}}</h6>
</div>
@endif
