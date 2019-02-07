@if(session()->has('message'))
    <p class="alert alert-success col-lg-12">{{session()->get('message')}}</p>
@endif