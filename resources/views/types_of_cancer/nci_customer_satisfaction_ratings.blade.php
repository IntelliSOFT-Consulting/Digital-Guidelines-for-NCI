@extends('layouts.simple')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
  var onetofive = <?php echo $onetofive; ?>;
  var user_friendly = <?php echo $user_friendly; ?>;
  var experience = <?php echo $experience; ?>;

  var barChartData = {
    labels: user_friendly,
    datasets: [{
      labels: 'Experience',
      //list of colors in this order pink blue green yellow purple 
      backgroundColor: ['#FFC0CB', '#87CEFA', '#90EE90', '#FFFF00', '#800080'],
      data: experience
    }]
  };

  // purpose
  var purpose = <?php echo $purpose; ?>;
  var purposedata = <?php echo $purposedata; ?>;

  var purposeChartData = {
    // get values from purpose array
    labels: purpose[0],
    labels: purpose,
    datasets: [{
      label: 'Response',
      //list of colors in this order pink blue green purple 
      backgroundColor: ['#FFC0CB', '#87CEFA', '#90EE90', '#800080'],
      data: purposedata
    }]
  };

  // helpful
  var helpful = <?php echo $yesno; ?>;
  var helpfuldata = <?php echo $helpfuldata; ?>;

  var helpfulChartData = {
    // get 
    labels: helpful,
    datasets: [{
      label: 'Response',
      backgroundColor: ['#FFC0CB', '#87CEFA'],
      data: helpfuldata
    }]
  };

  // how_helpful
  var how_helpful = <?php echo $onetoten; ?>;
  var how_helpfuldata = <?php echo $how_helpfuldata; ?>;

  var how_helpfulChartData = {
    labels: how_helpful,
    datasets: [{
      label: 'Response',
      backgroundColor: ['#FFC0CB', '#87CEFA', '#90EE90', '#FFFF00', '#800080', '#FF69B4', '#1E90FF', '#32CD32', '#FFD700', '#4B0082'],
      data: how_helpfuldata
    }]
  };
  // purpose_achieved
  var purpose_achieved = <?php echo $yesno; ?>;
  var purpose_achieveddata = <?php echo $purpose_achieveddata; ?>;

  var purpose_achievedChartData = {
    labels: purpose_achieved,
    datasets: [{
      label: 'Response',
      backgroundColor: ['#FFC0CB', '#87CEFA'],
      data: purpose_achieveddata
    }]
  };

  // Centers  
  //treatement
  var treatement = <?php echo $yesno; ?>;
  var treatementdata = <?php echo $treatement; ?>;

  var treatementChartData = {
    labels: treatement,
    datasets: [{
      label: 'Response',

      backgroundColor: ['#FFC0CB', '#87CEFA'],
      data: treatementdata
    }]
  };
  //attention
  var attention = <?php echo $yesno; ?>;
  var attentiondata = <?php echo $attention; ?>;

  var attentionChartData = {
    labels: attention,
    datasets: [{
      label: 'Response',
      backgroundColor: ['#FFC0CB', '#87CEFA'],
      data: attentiondata
    }]
  };
  //response_time
  var response_time = <?php echo $onetofive; ?>;
  var response_timedata = <?php echo $response_time; ?>;
  var response_timeChartData = {
    labels: response_time,
    datasets: [{
      label: 'Response',
      backgroundColor: ['#FFC0CB', '#87CEFA', '#90EE90', '#FFFF00', '#800080'],
      data: response_timedata
    }]
  };
  //easy_understand
  var easy_understand = <?php echo $yesno; ?>;
  var easy_understanddata = <?php echo $easy_understand; ?>;
  var easy_understandChartData = {
    labels: easy_understand,
    datasets: [{
      label: 'Response',
      backgroundColor: ['#FFC0CB', '#87CEFA'],
      data: easy_understanddata
    }]
  };
  //need_accommodation
  var need_accommodation = <?php echo $onetofive; ?>;
  var need_accommodationdata = <?php echo $need_accommodation; ?>;
  var need_accommodationChartData = {
    labels: need_accommodation,
    datasets: [{
      label: 'Response',
      backgroundColor: ['#FFC0CB', '#87CEFA', '#90EE90', '#FFFF00', '#800080'],
      data: need_accommodationdata
    }]
  };
  //need_accommodation
  var satisfied = <?php echo $onetofive; ?>;
  var satisfieddata = <?php echo $satisfied; ?>;
  var satisfiedChartData = {
    labels: satisfied,
    datasets: [{
      label: 'Response',
      backgroundColor: ['#FFC0CB', '#87CEFA', '#90EE90', '#FFFF00', '#800080'],
      data: satisfieddata
    }]
  };


  window.onload = function() {

    // experience
    var ctx = document.getElementById("experience").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'pie',
      data: barChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });
    // purpose
    var ctx = document.getElementById("purpose").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'pie',
      data: purposeChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });
    // helpful
    var ctx = document.getElementById("helpful").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'pie',
      data: helpfulChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });

    // how_helpful
    var ctx = document.getElementById("how_helpful").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'bar',
      data: how_helpfulChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        },
        legend: {
          display: false,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });
    // purpose_achieved
    var ctx = document.getElementById("purpose_achieved").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'pie',
      data: purpose_achievedChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });

    // treatement
    var ctx = document.getElementById("treatement").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'pie',
      data: treatementChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });
    // attention
    var ctx = document.getElementById("attention").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'pie',
      data: attentionChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });
    // response_time
    var ctx = document.getElementById("response_time").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'bar',
      data: response_timeChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: false,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });
    // easy_understand
    var ctx = document.getElementById("easy_understand").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'pie',
      data: easy_understandChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: true,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });
    // need_accommodation
    var ctx = document.getElementById("need_accommodation").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'bar',
      data: need_accommodationChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: false,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });
    // satisfied
    var ctx = document.getElementById("satisfied").getContext("2d");
    window.myBar = new Chart(ctx, {
      type: 'bar',
      data: satisfiedChartData,
      options: {
        elements: {
          rectangle: {
            borderWidth: 2,
            borderColor: '#c1c1c1',
            borderSkipped: 'bottom'
          }
        },
        legend: {
          display: false,
          position: 'right',
          labels: {
            fontColor: '#333'
          }
        },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        },
        responsive: true,
        title: {
          display: false,
          text: 'Yearly User Joined'
        }
      }
    });



  };
</script>
<style>
  body {
    font-family: Arial;
  }

  /* Style the tab */
  .tab {
    overflow: hidden;
    border: 1px solid #fff;
    width: 1000px;
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
            <div class="col-md-12">
              <div class="tab">
                @if(Session::has('submitted'))

                <button class="tablinks" style="display: active;" onclick="openTab(event, 'website')">Website Questions</button>
                <button class="tablinks" onclick="openTab(event, 'center')" id="defaultOpen">Cancer Center Customer Satisfaction</button>
                @else

                <button class="tablinks" style="display: active;" onclick="openTab(event, 'website')" id="defaultOpen">Website Questions</button>
                <button class="tablinks" onclick="openTab(event, 'center')">Cancer Center Customer Satisfaction</button>
                @endif

              </div>
              @if(Session::has('submitted'))
              <div id="website" class="tabcontent">
                @else
                <div id="website" class="tabcontent" style="display:block;">
                  @endif

                  <h3> </h3>
                  @if(userCan('users-manage'))

                  <!-- Start of response display -->
                  <li>Rate your experience using the website/Do you feel that the website is user friendly?</li>
                  <div name style="background-color: #FBF4F4;margin:5px;">
                    <canvas id="experience" height="150" width="600"></canvas>
                  </div>
                  <li>What was your purpose of visiting the website?</li>
                  <div name style="background-color: #FBF4F4;margin:5px;">
                    <canvas id="purpose" height="150" width="600"></canvas>
                  </div>
                  <li>Was the information/ content helpful to your search?</li>
                  <div name style="background-color: #FBF4F4;margin:5px;">
                    <canvas id="helpful" height="150" width="600"></canvas>
                  </div>
                  <li>On a scale of 1-10 how helpful was the content on the website in answering your questions?</li>
                  <div name style="background-color: #FBF4F4;margin:5px;">
                    <canvas id="how_helpful" height="150" width="600"></canvas>
                  </div>
                  <li>Were you sufficiently able to achieve your purpose for visiting the website?</li>
                  <div name style="background-color: #FBF4F4;margin:5px;">
                    <canvas id="purpose_achieved" height="150" width="600"></canvas>
                  </div>
                  <li>What was your biggest challenge in navigating the website?</li>
                  <div name style="background-color: #FBF4F4;margin:5px;">
                    <?php $i = 0; ?>
                    @foreach($website as $web)
                    <?php $i++; ?>
                    <ul>
                      <!-- only show if not null -->
                      @if($web->biggest_challenge != null)
                      <li>{{$web->biggest_challenge}}</li>
                      @endif
                    </ul>

                    @endforeach
                  </div>
                  <li>How can we improve your experience on the website?</li>
                  <div name style="background-color: #FBF4F4;margin:5px;">
                    <?php $i = 0; ?>
                    @foreach($website as $web)
                    <?php $i++;
                    ?>

                    <ul>
                      <!-- only show if it is not null -->
                      @if($web->improve_experience != null)

                      <li>{{$web->improve_experience}}</li>
                      @endif
                    </ul>

                    @endforeach
                  </div>


                  <!-- End of Display form -->


                  @else
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
                  @endif
                </div>
                @if(Session::has('submitted'))
                <div id="center" class="tabcontent" style="display:block;">
                  @else
                  <div id="center" class="tabcontent">
                    @endif
                    <h3></h3>
                    @if(userCan('users-manage'))
                    <!-- Start of Centers -->
                    <li>During your visit, did you feel that you were treated with courtesy and respect?</li>
                    <div name style="background-color: #FBF4F4;margin:5px;">
                      <canvas id="treatement" height="150" width="600"></canvas>
                    </div>
                    <li>Do you feel that the staff listened carefully and paid attention to your needs?</li>
                    <div name style="background-color: #FBF4F4;margin:5px;">
                      <canvas id="attention" height="150" width="600"></canvas>
                    </div>

                    <li> How long did you wait to receive the service?/ Do you feel that the response time was adequate?</li>
                    <div name style="background-color: #FBF4F4;margin:5px;">
                      <canvas id="response_time" height="150" width="600"></canvas>
                    </div>
                    <li>Were the staff able to explain things to you in a way that was easy for you to understand?</li>
                    <div name style="background-color: #FBF4F4;margin:5px;">
                      <canvas id="easy_understand" height="150" width="600"></canvas>
                    </div>
                    <li> To what extent do the facilities/infrastructure of the cancer centre accommodate your needs?</li>
                    <div name style="background-color: #FBF4F4;margin:5px;">
                      <canvas id="need_accommodation" height="150" width="600"></canvas>
                    </div>
                    <li> Are you satisfied with the service you received?</li>
                    <div name style="background-color: #FBF4F4;margin:5px;">
                      <canvas id="satisfied" height="150" width="600"></canvas>
                    </div>
                    <li>How can the cancer centre improve service delivery?</li>
                    <div name style="background-color: #FBF4F4;margin:5px;">
                      <?php $i = 0; ?>
                      @foreach($centers as $web)
                      <?php $i++; ?>
                      <ul>
                        <!-- only show if not null -->
                        @if($web->improvement != null)
                        <li>{{$web->improvement}}</li>
                        @endif
                      </ul>

                      @endforeach
                    </div>

                    <!-- End of Centers -->

                    @else
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
                    @endif
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
  //default active 
  $(document).ready(function() {
    $("#defaultOpen").addClass("active");
  });

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