@extends('layouts.simple')

@section('body')
@include('common/nci_custom_styles')
<style>
@media screen and (min-width: 480px) {
  .definition {
    margin-left: 0%;margin-right: 0%;
  }
  .label {
    margin-left: 0%;margin-right: 0%;
  }
}
</style>
<div style="margin:5px">
          <!-- search for nci -->
          @include('common/nci_search')
          <!-- end of search -->
          <div class="row mission" style="margin-top:40px;height:auto">
          @if(Session::has('message'))
          <div class="alert alert-success"> 
            {{Session::get('message')}}      
           </div> 
        @endif
          <h2 style="text-align:center">Cancer Management Center Facility Forms Download</h2>
            <div class="definition" style="margin:30px;margin-left: 20%;margin-right: 10%;">
            <h5 class="" >
            <ol type = "1">
            <div class="row">
            <div class="col-md-6">
            <!-- @C Application form to NCI-3
/C Generic layout design (chemotherapy unit.
7C Generic layout design (Radiation unit.
<C Generic layout design (Nuclear medicine unit.
$C Checklist for a medical cyclotron facilit,
"C PPE list -->
                  
            <li><a href = "{{url('/books/nci-k/pdf')}}"><u>Application form to NCI-K<u></a></li>
            <li><a href = "{{url('/')}}"><u>Generic layout design (chemotherapy unit)<u></a></li>
            <li><a href = "{{url('/')}}"><u> Generic layout design (Radiation unit)<u></a></li>
            <li><a href = "{{url('/')}}"><u>Generic layout design (Nuclear medicine unit)<u></a></li>
            <li><a href = "{{url('/')}}"><u>Checklist for a medical cyclotron facility</u></a></li>
            <li><a href = "{{url('/books/ppe/pdf')}}"><u>PPE list</u></a></li>

           
            
            </div>
            </div>
             </ol>
            </h5>
            </div>
            
          </div>
          <div class="row mission" style="margin-top:40px;height:auto">
          @if(Session::has('message'))
          <div class="alert alert-success"> 
            {{Session::get('message')}}      
           </div> 
        @endif
          <h2 style="text-align:center;text-decoration:none;">NCI-K Inspection Forms</h2>
            <div class="definition" style="margin:30px;margin-left: 20%;margin-right: 10%;">
            <h5 class="" >
            <ol type = "1">
            <div class="row">
            <div class="col-md-6">
            <!-- @C Application form to NCI-3
/C Generic layout design (chemotherapy unit.
7C Generic layout design (Radiation unit.
<C Generic layout design (Nuclear medicine unit.
$C Checklist for a medical cyclotron facilit,
"C PPE list -->
                  
            <li><a href = "{{url('/books/nci-k/pdf')}}"><u>NCI Inspection Checklist<u></a></li>
            <li><a href = "{{url('/books/nci/cyclotron/pdf')}}"><u> Inspection checklist for a medical cyclotron facility<u></a></li>
            <li><a href = "{{url('/books/ppe/pdf')}}"><u>PPE list</u></a></li>

           
            
            </div>
            </div>
             </ol>
            </h5>
            </div>
            
          </div>
          <div class="row mission" style="margin-top:40px;height:auto">
          @if(Session::has('message'))
          <div class="alert alert-success"> 
            {{Session::get('message')}}      
           </div> 
        @endif
          <h2 style="text-align:center">Cancer Center Patient Forms</h2>
            <div class="definition" style="margin:30px;margin-left: 20%;margin-right: 10%;">
            <h5 class="" >
            <ol type = "1">
            <div class="row">
            <div class="col-md-6">
            <!-- @C Application form to NCI-3
/C Generic layout design (chemotherapy unit.
7C Generic layout design (Radiation unit.
<C Generic layout design (Nuclear medicine unit.
$C Checklist for a medical cyclotron facilit,
"C PPE list -->
                  
            <li><a href = "{{url('/')}}"><u>Cancer Abstract Form<u></a></li>
            <li><a href = "{{url('/')}}"><u> Cancer Screening and Early Diagnosis Form<u></a></li>
            <li><a href = "{{url('/')}}"><u> Cancer Treatment Informed Consent Form<u></a></li>
            <li><a href = "{{url('/')}}"><u>Chemotherapy Administration Form<u></a></li>
            <li><a href = "{{url('/')}}"><u>Medication Label</u></a></li>
            <li><a href = ""><u>New Patient Oncology Assessment Form</u></a></li>
            <li><a href = ""><u>Pain Assessment Tools</u></a></li>


           
            
            </div>
            </div>
             </ol>
            </h5>
            </div>
            
          </div>

          <!-- footer start -->
      @include('common/nci_footer')
      <!-- footer end -->
</div>
@stop
