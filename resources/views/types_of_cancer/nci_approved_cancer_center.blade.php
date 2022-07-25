@extends('layouts.simple')

@section('body')
@include('common/nci_custom_styles')

<div style="margin:5px">
<div class="modal fade" id="exampleModalLabel1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Add Cancer Cenetr</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <button style="float:right;margin-right:3%;" type="button" id="adc" class="btn btn-secondary ">Add County</button>
      <button style="float:right;margin-right:3%;display:none" type="button" id="facility" class="btn btn-primary ">Existing County</button> 
     
      <div class="modal-body">
      <form method = "POST" action = "{{url('/add/county/cancer/ceneter')}}">
                        @csrf
          <div class="form-group" id="add_to_me">
            <label for="county" class="col-form-label">County:</label>
            <select style="width: 100%;background-color: #FBF4F4;"id="county"  name="country" class="form-control">
            @foreach ($centers as $center)
                <option value="{{$center->County}}"> {{$center->County}}</option> 
            @endforeach 
                    <!-- <option value="Middle level">Middle level</option> 
                    <option value="sBasic/ Essential" > Basic/ Essential</option> 
                    <option value="Comprehensive Cancer Centre" > Comprehensive Cancer Centre</option>  -->
                    </select>
            </div>
            <div id="2" class="form-group" style="display:none;">
               
            </div>
          <div class="form-group" id="fdaacil">
            <label for="facility" class="col-form-label">Facility:<i id="facil" class="fa fa-plus"></i></label>
            <input type="text" style="width: 100%;background-color: #FBF4F4;" class="form-control" id="fdacility" name="facility[]">
            
          </div>
          <div class="form-group">
            <label for="designation" class="col-form-label">Designation:</label>
                <select required style="display: inline"id="email"  name="designation" class="form-control">
                <option value="mensuelle"> Mensuelle</option>  
                    <option value="Middle level">Middle level</option> 
                    <option value="Basic/ Essential" > Basic/ Essential</option> 
                    <option value="Comprehensive Cancer Centre" > Comprehensive Cancer Centre</option> 
                    </select>
          </div>
          <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" >Submit</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
          <!-- search for nci -->
          @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
          <button style="float:right;margin-top:-40px;" type="button" class="btn btn btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Cancer Center</button>
          <?php $i=0 ?>
          @include('common/nci_search')
          
          <!-- end of search -->
          <div class="row mission" style="margin-top:40px;">
          <table id="example" class="display table-responsive" style="width:100%">
        <thead>
            <tr>
                <th>#No</th>
                <th>County</th>
                <th>Facility</th>
                <th>Designation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($centers as $center)
            <?php $i++;?>
            <tr>
              <td>{{$i}}</td>
                <td>{{$center->County}}</td>
                <td>
                    <?php
                $data=DB::table('percounty_centers_models')->where('county_id',$center->County)->get();
                if(count($data)>0){
                    
                $work=1;
                foreach($data as $woekers){
                    echo '<a href="#"><h6><strong>'.$work++.' .'. $woekers->Facility. '</strong></h6></a><hr>';
                }
                }else{
                    echo 'Not yet assigned to any worker';
                }
                ?>
                </td>
                <td>
                    <?php
                if(count($data)>0){
                    
                    $work=1;
                    foreach($data as $woekers){
                        echo '<h6>'.$woekers->Designation. '</h6><hr>';
                    }
                    }else{
                        echo 'Not yet assigned to any worker';
                    }
                    ?>
                </td>
            </tr>

            @endforeach
              </tbody>
</table>
            
          </div>
          <!-- start definition -->
          
          <!--  end Requirements for Establishing a Basic Cancer Management Center-->
          <!-- footer start -->
      @include('common/nci_footer')
      <!-- footer end -->
</div>
@stop
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>
 
<script type="text/javascript">
$(document).ready(function() {
    $(document).ready(function() {
    $('#example').DataTable( {
    } );
} );
$('#adc').on('click',function(){
    var county='<label for="county" class="col-form-label">County:</label><input type="text" style="width: 100%;background-color: #FBF4F4;" class="form-control" id="county" name="newcounty">';
    if($('#add_to_me').css('display')!='none'){
    $('#2').html(county).show();
    //$(this).hide();
    //$('#facility').show();
    $('#add_to_me').hide();
    $('#adc').html('Add Existing');
    }else if($('#2').css('display')!='none'){
        $('#add_to_me').show();
        $('#2').hide();
        $('#adc').html('Add County');
    }
});
$("body").on("click", "#DeleteRow", function () {
            $(this).parents("#facility").remove();
        });
$('#facility').on('click',function(){
    var county='<div class="form-group" id="facility"><label for="facility" class="col-form-label">Facility:</label><input type="text" style="width: 100%;background-color: #FBF4F4;" class="form-control" id="facility" name="facility[]"><i style="float:right" id="DeleteRow" class="fa fa-trash"></i></div>';
     $('#fdaacil').append(county);
});
} );

</script>
