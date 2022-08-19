@extends('layouts.simple')

@section('body')
    <div class="container small" style="max-width: 100%;">
    <main class="content-wrap card" style="min-height: auto;">
    @include('common/nci_search')
        </main>
       <main class="content-wrap card" style="min-height: auto;">
       @if(Session::has('message'))
          <div class="alert alert-success"> 
            {{Session::get('message')}}      
           </div> 
        @endif
          <h2 style="text-align:center;font-size: 16px;">Customer Ratings Satisfaction Form</h2>
            <div class="definition" >
            <h5 class="" >
            <ol type = "1">
            <div class="row">
            <div class="col-md-6">
                  <form method = "POST" action = "{{url('/add/user/ratings')}}">
                        @csrf
            <li>How did you find the experience of booking appointments?</li>
            <div class="form-control" name style="background-color: #FBF4F4;margin:5px;">
            <label class="inline">Very easy</label>
            <input type="radio" name="difficult" value="1" required>
            <input type="radio" name="difficult" value="2">
            <input type="radio" name="difficult" value="3">
            <input type="radio" name="difficult" value="4">
            <input type="radio" name="difficult" value="5">
            <label class="inline" style="    margin-left:20px;">Very difficult</label>
                        </div>
            <li>Were our staff empathetic to your needs?</li>
            <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
            <label class="inline">Not Very empathetic</label>
<input type="radio" name="empathetic" value="1" required>
<input type="radio" name="empathetic" value="2">
<input type="radio" name="empathetic" value="3">
<input type="radio" name="empathetic" value="4">
<input type="radio" name="empathetic" value="5">
<label class="inline" style="    margin-left:20px;">Very empathetic</label>
            </div>
            <li> How long did you have to wait until the doctor attends to you?</li>
            <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
            <label class="inline">Too long easy</label>
<input type="radio" name="long" value="1" required>
<input type="radio" name="long" value="2">
<input type="radio" name="long" value="3">
<input type="radio" name="long" value="4">
<input type="radio" name="long" value="5">
<label class="inline" style="    margin-left:20px;">Not at all</label>
            </div>
            <li>Were you satisfied with the doctor you were allocated with?</li>
            <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
            <label class="inline">least satisfied</label>
<input type="radio" name="satisfied" id="at" value="1" required>
<input type="radio" name="satisfied" id="at" value="2">
<input type="radio" name="satisfied" id="at" value="3">
<input type="radio" name="satisfied" id="at" value="4">
<input type="radio" name="satisfied" id="at" value="5">
<label class="inline" style="    margin-left:20px;">Very satisfied</label>
            </div>
            <li>Any additional Comments?</li>
            <!-- <div class="form-control"> -->
            <input type="text" name="comment"  style="background-color: #FBF4F4;width: 100%;" class="form-control" id="comment" placeholder="Enter any additional comments here..." name="comment">
            
            <!-- </div> -->
            <div class="inline" style="float:right;margin-top:10px;">
  <button type="button"   onclick=" check()"style="background-color: #DED9D9;border-radius:10px;color:white">Cancel</button>
  <button type="submit" style="background-color: #D820C5;border-radius:10px;color:white" value="Submit">Submit</button>
            </div>
      </form>
            </div>
            </div>
             </ol>
            </h5>
            </div>
            
        </main>
    </div>
    <div style="background:white;height:fit-content">
    @include('common/nci_footer')
    </div>
@stop