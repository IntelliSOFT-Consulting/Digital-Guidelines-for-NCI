@extends('layouts.simple')
<style>
  body {
    font-family: Arial;
  }

  /* Style the tab */
  .tab {
    overflow: hidden;
    border: 1px solid #fff;
    width: 100%;
    background-color: #fff;
    text-align: center;
  }

  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 16px;
    text-align: center;
    border-bottom: 2px solid #A28DC2;
  }

  /* Change background color of buttons on hover */
  .tab button:hover {
    background-color: #fff;
    color: #0000FF;
  }

  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #fff;
    color: #0000FF;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    /* border: 1px solid #ccc; */
    /* border-top: none; */
  }
</style>

@section('body')
<div class="container small" style="max-width: 100%;">
  <main class="content-wrap card" style="min-height: auto;">

    <h2 style="text-align:center;font-size: 16px;">Customer Ratings Satisfaction Form</h2>
  </main>
  <main class="content-wrap card" style="min-height: auto;">
    @if(Session::has('message'))
    
    <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{Session::get('message')}}
    </div>
    @endif
    <div class="definition">
      <h5 class="">
        <ol type="1">
          <div class="row">
            <div class="col-md-6">
              <div class="tab">
                <!-- style="max-width: 100%;"> -->

                <button class="tablinks" onclick="openTab(event, 'website')">Website Questions</button>
                <button class="tablinks" onclick="openTab(event, 'center')">Cancer Center Customer Satisfaction</button>

              </div>
              <div id="website" class="tabcontent" style="display:block;">
                <h3> </h3>
                <form method="POST" action="{{url('/add/user/website/ratings')}}">
                  @csrf
                  <li>Rate your experience using the website/Do you feel that the website is user friendly?</li>
                  <div class="form-control" name style="background-color: #FBF4F4;margin:5px;">
                    <label class="inline">Very easy</label>
                    <input type="radio" name="experience" value="1" required>
                    <input type="radio" name="experience" value="2">
                    <input type="radio" name="experience" value="3">
                    <input type="radio" name="experience" value="4">
                    <input type="radio" name="experience" value="5">
                    <label class="inline" style="    margin-left:20px;">Very difficult</label>
                  </div>
                  <li>What was your purpose of visiting the website?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <input type="radio" name="purpose" value="Educational" required>Educational
                    <input type="radio" name="purpose" value="Medical">Medical
                    <input type="radio" name="purpose" value="Setting up a cancer centre">Setting up a cancer centre
                    <input type="radio" name="purpose" value="General knowledge">General knowledge
                  </div>
                  <li>Was the information/ content helpful to your search?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <input type="radio" name="helpful" value="Yes" required>Yes
                    <input type="radio" name="helpful" value="No">No
                  </div>
                  <li>On a scale of 1-10 how helpful was the content on the website in answering your questions?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <label class="inline">1</label>
                    <input type="radio" name="how_helpful" id="at" value="1" required>
                    <input type="radio" name="how_helpful" id="at" value="2">
                    <input type="radio" name="how_helpful" id="at" value="3">
                    <input type="radio" name="how_helpful" id="at" value="4">
                    <input type="radio" name="how_helpful" id="at" value="5">
                    <input type="radio" name="how_helpful" id="at" value="6">
                    <input type="radio" name="how_helpful" id="at" value="7">
                    <input type="radio" name="how_helpful" id="at" value="8">
                    <input type="radio" name="how_helpful" id="at" value="9">
                    <input type="radio" name="how_helpful" id="at" value="10">
                    <label class="inline" style="    margin-left:10px;">10</label>
                  </div>
                  <li> Were you sufficiently able to achieve your purpose for visiting the website?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <input type="radio" name="purpose_achieved" id="at" value="Yes" required>Yes
                    <input type="radio" name="purpose_achieved" id="at" value="No"> No
                  </div>

                  <li>What was your biggest challenge in navigating the website?</li>
                  <input type="text" name="biggest_challenge" style="background-color: #FBF4F4;width: 100%;" class="form-control" id="challenge" placeholder="Type your response here...">
                  <li>How can we improve your experience on the website?</li>
                  <input type="text" name="improve_experience" style="background-color: #FBF4F4;width: 100%;" class="form-control" id="improve" placeholder="Type your response here...">

                  <!-- </div> -->
                  <div class="inline" style="float:right;margin-top:10px;">
                    <button type="button" onclick=" check()" style="background-color: #DED9D9;border-radius:10px;color:white">Cancel</button>
                    <button type="submit" style="background-color: #D820C5;border-radius:10px;color:white" value="Submit">Submit</button>
                  </div>
                </form>
              </div>

              <div id="center" class="tabcontent">
                <h3></h3>
                <form method="POST" action="{{url('/add/user/ratings')}}">
                  @csrf
                  <li>During your visit, did you feel that you were treated with courtesy and respect?</li>
                  <div class="form-control" name style="background-color: #FBF4F4;margin:5px;">
                    <input type="radio" name="treatement" value="Yes" required>Yes
                    <input type="radio" name="treatement" value="No">No
                  </div>
                  <li>Do you feel that the staff listened carefully and paid attention to your needs?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <input type="radio" name="attention" value="Yes" required>Yes
                    <input type="radio" name="attention" value="No">No
                  </div>
                  <li> How long did you wait to receive the service?/ Do you feel that the response time was adequate?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <label class="inline">Least adequate</label>
                    <input type="radio" name="response_time" value="1" required>
                    <input type="radio" name="response_time" value="2">
                    <input type="radio" name="response_time" value="3">
                    <input type="radio" name="response_time" value="4">
                    <input type="radio" name="response_time" value="5">
                    <label class="inline" style="    margin-left:20px;">very adequate</label>
                  </div>
                  <li>Were the staff able to explain things to you in a way that was easy for you to understand?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <input type="radio" name="easy_understand" id="at" value="Yes" required>Yes
                    <input type="radio" name="easy_understand" id="at" value="No">No
                  </div>
                  <li> To what extent do the facilities/infrastructure of the cancer centre accommodate your needs?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <label class="inline">Least adequate</label>
                    <input type="radio" name="need_accommodation" value="1" required>
                    <input type="radio" name="need_accommodation" value="2">
                    <input type="radio" name="need_accommodation" value="3">
                    <input type="radio" name="need_accommodation" value="4">
                    <input type="radio" name="need_accommodation" value="5">
                    <label class="inline" style="    margin-left:20px;">very adequate</label>
                  </div>
                  <li> Are you satisfied with the service you received?</li>
                  <div class="form-control" style="background-color: #FBF4F4;margin:5px;">
                    <label class="inline">Least adequate</label>
                    <input type="radio" name="satisfied" value="1" required>
                    <input type="radio" name="satisfied" value="2">
                    <input type="radio" name="satisfied" value="3">
                    <input type="radio" name="satisfied" value="4">
                    <input type="radio" name="satisfied" value="5">
                    <label class="inline" style="    margin-left:20px;">very adequate</label>
                  </div>
                  <li>How can the cancer centre improve service delivery?</li>
                  <!-- <div class="form-control"> -->
                  <input type="text" name="improvement" style="background-color: #FBF4F4;width: 100%;" class="form-control" id="improvement" placeholder="Type your response">

                  <!-- </div> -->
                  <div class="inline" style="float:right;margin-top:10px;">
                    <button type="button" onclick=" check()" style="background-color: #DED9D9;border-radius:10px;color:white">Cancel</button>
                    <button type="submit" style="background-color: #D820C5;border-radius:10px;color:white" value="Submit">Submit</button>
                  </div>
                </form>
              </div>

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
<script>
  function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>
@stop