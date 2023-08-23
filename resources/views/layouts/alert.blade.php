@if(Session::has('flash_message'))
    <div  class="alert bg-success ">
        <strong id="flash_message">{!! session('flash_message') !!}</strong>
    </div>
@endif
@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert bg-danger ">
            <strong>{{ $error }}</strong>
        </div>
    @endforeach
@endif
