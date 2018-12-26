<h1>SIGNUP PAGE</h1>
<form method="post" action="{{ route('userregister')}}">
  <div class="firstname">
  <span class="input-group-addon" id="basic-addon1">firstname</span>
  <input type="text" class="form-control" placeholder="firstname" name="firstname" aria-describedby="basic-addon1">
</div>

<div class="lastname">
<span class="input-group-addon" id="basic-addon1">lastname</span>
<input type="text" class="form-control" placeholder="lastname" name="lastname" aria-describedby="basic-addon1">
</div>

<div class="email">
<span class="input-group-addon" id="basic-addon1">email</span>
<input type="email" class="form-control" placeholder="email" name="email" aria-describedby="basic-addon1">
</div>

<div class="password">
<span class="input-group-addon" id="basic-addon1">password</span>
<input type="password" class="form-control" placeholder="password" name="password" aria-describedby="basic-addon1">
</div>

<div class="password">
<span class="input-group-addon" id="basic-addon1">password confirmation</span>
<input type="password" class="form-control" placeholder="password1" name="password1" aria-describedby="basic-addon1">
</div>


{{csrf_field()}}
  <button type="submit" name="submit" class="btn btn-primary">submit</button>
</form>

@if(count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $er)
    {{$er}}
    @endforeach
</div>
@endif
