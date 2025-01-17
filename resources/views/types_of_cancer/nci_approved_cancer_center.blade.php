@extends('layouts.simple')

@section('body')
@include('common/nci_custom_styles')
@if(user()->can('book-create-all'))
<button style="float:right;margin-bottom:2px;background-color: #D820C5" type="button" class="btn btn btn-secondary" data-toggle="modal" data-target="#exampleModalLabel1" data-whatever="@mdo">Add Cancer Center</button>
@endif
<div class="container" style="max-width: 100%;">
  <main class="content-wrap card" style="min-height: auto;">
    <div class="modal fade" id="exampleModalLabel1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Add Cancer center</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <button style="float:right;margin-right:3%;" type="button" id="adc" class="btn btn-secondary ">Add County</button>
          <button style="float:right;margin-right:3%;display:none" type="button" id="facility" class="btn btn-primary ">Existing County</button>

          <div class="modal-body">
            <form method="POST" action="{{url('/add/county/cancer/center')}}">
              @csrf
              <div class="form-group" id="add_to_me">
                <label for="county" class="col-form-label">County:</label>
                <select style="width: 100%;background-color: #FBF4F4;" id="county" name="country" class="form-control">
                  @foreach ($centers as $center)
                  <option value="{{$center->County}}"> {{$center->County}}</option>
                  @endforeach

                </select>
              </div>
              <div id="2" class="form-group" style="display:none;">

              </div>
              <div class="form-group" id="fdaacil">
                <label for="facility" class="col-form-label">Facility:<i id="facil" class="fa fa-plus"></i></label>
                <input type="text" style="width: 100%;background-color: #FBF4F4;" class="form-control" id="fdacility" name="facility[]">

              </div>
              <div class="form-group">
                <label for="county" class="col-form-label">Cancer Treatment Modalities::</label>
                <input style="width: 100%;background-color: #FBF4F4;" type="text" name="modalities" class="form-control" id="modalities">
              </div>
              <div class="form-group">
                <label for="facility" class="col-form-label">Physical Address:</label>
                <input style="width: 100%;background-color: #FBF4F4;" type="text" name="physical" class="form-control" id="physical">
              </div>
              <div class="form-group">
                <label for="designation" class="col-form-label"> Level of Cancer center:</label>
                <select required style="display: inline" id="email" name="designation" class="form-control">
                  <option value="" selected disabled> </option>
                  <option value="Middle level">Middle level</option>
                  <option value="Basic/ Essential"> Basic/ Essential</option>
                  <option value="Comprehensive Cancer Centre"> Comprehensive Cancer Centre</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    <!-- edit center -->
    <div class="modal fade" id="center" tabindex="-1" role="dialog" aria-labelledby="center" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="center">Update Center Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{url('/update/cancer/center')}}">
              @csrf
              <input type="hidden" name="facility_id" id="facility_id" />
              <input type="hidden" name="ci" id="ci" />
              <div class="form-group">
                <label for="county" class="col-form-label">County:</label>
                <input style="width: 100%;background-color: #FBF4F4;" type="text" name="county" class="form-control" id="county">
              </div>
              <div class="form-group">
                <label for="facility" class="col-form-label">Facility</label>
                <input style="width: 100%;background-color: #FBF4F4;" type="text" name="facility" class="form-control" id="facility">
              </div>
              <div class="form-group">
                <label for="county" class="col-form-label">Cancer Treatment Modalities::</label>
                <input style="width: 100%;background-color: #FBF4F4;" type="text" name="addres" class="form-control" id="physical">
              </div>
              <div class="form-group">
                <label for="facility" class="col-form-label">Physical Address:</label>
                <input style="width: 100%;background-color: #FBF4F4;" type="text" name="modality" class="form-control" id="modalities">
              </div>
              <div class="form-group">
                <label for="exurlink" class="col-form-label">Description Url:</label>
                <input style="width: 100%;background-color: #FBF4F4;" type="text" name="exurlink" class="form-control" id="ext_link">
              </div>

              <div class="modal-footer">
                <button type="submit" style="background:#D820C5" class="btn btn-primary">Update Center</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif

    <?php 

    use Illuminate\Support\Facades\DB;

    //$i = 0 ?>
    <div class="col-sm-7 form-group">
    <!-- <div class="input-group">
        <input class="form-control" id="search"
               placeholder="Search..."
               type="text">
    </div> -->
</div>
    <!-- <div class="row mission" style="margin-top:40px;"> -->
    <table id="example" class="display table-responsive" style="width:100%">
      <thead>
        
          <th style="width:70px">#No</th>
          <th style="width:100px">County</th>
          <th>Facility</th>
          <th>Physical Address</th>
          <th>Treatment Modalities</th>
          <th >Designation</th>
          <th >Action</th>
        </tr>
      </thead>
      <!-- $data = DB::table('percounty_centers_models')->where('county_id', $center->County)->get(); -->
      @foreach($centers as $index => $center)
      <?php $data = DB::table('percounty_centers_models')->where('county_id', $center->County)->get(); ?>
        <tr>
            <td rowspan="{{count($data)}}">
               {{ $index+1 }}
            </td>
            <td rowspan="{{count($data)}}">
               {{ $center->County }}
            </td>
            <td> 
              <?php  
              if(isset($data[0]->ext_link)){
              $url = $data[0]->ext_link;
              }else
              $url = "#";
              ?>
            <a href="{{ $url }}" target="_blank">{{$data[0]->Facility }}</a>
            </td>
            <td> {{$data[0]->Physical_Address }} </td>
            <td> {{$data[0]->Cancer_Treatment_Modalities }} </td>
            <td> 
              {{$data[0]->Designation }} 
            </td>
            <td> 
            <?php  
            
              if(isset($data[0]->ext_link)){
              $url = $data[0]->ext_link;
              }else
              $url = "#";
              ?>
            <i style="font-size:12px" class=" fa fa-edit btn btn-succes"data-ext_link="{{$url}}" data-modalities="{{$data[0]->Cancer_Treatment_Modalities }}"data-physical="{{$data[0]->Physical_Address }}"data-facility="{{$data[0]->Facility }}"data-ci="{{$center->id}}"data-county="{{$center->County}}" data-id="{{$data[0]->id }}"data-toggle="modal" data-target="#center" onclick="showmod()" data-whatever="@mdo"></i>
            </td>
        
        <?php for ($i=1; $i <count($data) ; $i++) { ?>
          <tr>
          <td> 
              <?php  
              if(isset($data[$i]->ext_link)){
              $url = $data[$i]->ext_link;
              }else
              $url = "#";
              ?>
            <a href="{{ $url }}" target="_blank">{{$data[$i]->Facility }}</a>
            </td>
            <td> {{$data[$i]->Physical_Address }} </td>
            <td> {{$data[$i]->Cancer_Treatment_Modalities }} </td>
            <td> 
              {{$data[$i]->Designation }} 2
            </td>
            <td> 
            <?php  
              if(isset($data[$i]->ext_link)){
              $url = $data[$i]->ext_link;
              }else
              $url = "#";
              ?>
            <i style="font-size:16px" class=" fa fa-edit btn btn-succes"data-ext_link="{{$url}}" data-modalities="{{$data[$i]->Cancer_Treatment_Modalities }}"data-physical="{{$data[$i]->Physical_Address }}"data-facility="{{$data[$i]->Facility }}"data-ci="{{$center->id}}"data-county="{{$center->County}}" data-id="{{$data[$i]->id }}"data-toggle="modal" data-target="#center" onclick="showmod()" data-whatever="@mdo"></i>
            </td>
        </tr>
      <?php  } ?>
      </tr>
    @endforeach
    </table>
    <div class="pull-right">{!! str_replace('/?','?',$centers->render()) !!}</div>
    <div class="pull-left"><i class="col-sm-12">
        Total: {{count($centers)}} records
    </i></div>
    <!-- </div> -->

    <!-- footer end -->

  </main>
 
</div>
@include('common/nci_footer')

@stop
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>

<script type="text/javascript">
  $(document).ready(function() { 
    $('#search').on('input', function() {
      var searchval=$(this).val();
      alert(searchval);
      $.ajax({
      //url:"nci/approved/cancer/ceneter/",
      data:{"page":searchval},
      type: "GET",
      success:function(data)
      {
        console.log(data);
      }
  })
    }) 
    $('#adc').on('click', function() {
      var county = '<label for="county" class="col-form-label">County:</label><input type="text" style="width: 100%;background-color: #FBF4F4;" class="form-control" id="county" name="newcounty">';
      if ($('#add_to_me').css('display') != 'none') {
        $('#2').html(county).show();
        //$(this).hide();
        //$('#facility').show();
        $('#add_to_me').hide();
        $('#adc').html('Add Existing');
      } else if ($('#2').css('display') != 'none') {
        $('#add_to_me').show();
        $('#2').hide();
        $('#adc').html('Add County');
      }
    });
    $("body").on("click", "#DeleteRow", function() {
      $(this).parents("#facility").remove();
    });
    $('#facility').on('click', function() {
      var county = '<div class="form-group" id="facility"><label for="facility" class="col-form-label">Facility:</label><input type="text" style="width: 100%;background-color: #FBF4F4;" class="form-control" id="facility" name="facility[]"><i style="float:right;font-size: 25px;margin-right: 10px" id="DeleteRow" class="fa fa-trash"></i></div>';
      $('#fdaacil').append(county);
    });
    $('#center').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('county')
      var facility = button.data('facility')
      var county = button.data('county')
      var id = button.data('id')
      var ci = button.data('ci')
      var modalities = button.data('modalities')
      var physical = button.data('physical')
      var ext_link = button.data('ext_link') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      //alert(id)
      var modal = $(this)
      modal.find('.modal-title').text('New Center to ' + recipient)
      modal.find('.modal-body #facility').val(facility)
      modal.find('.modal-body #county').val(recipient)
      modal.find('.modal-body #facility_id').val(id)
      modal.find('.modal-body #modalities').val(modalities)
      modal.find('.modal-body #physical').val(physical)
      modal.find('.modal-body #ci').val(ci)
      modal.find('.modal-body #ext_link').val(ext_link)



    }) 
  });
</script>