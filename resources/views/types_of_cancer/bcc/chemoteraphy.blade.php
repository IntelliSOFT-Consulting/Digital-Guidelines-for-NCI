@extends('layouts.simple')

@section('body')
@include('common/nci_custom_styles')

<div style="margin:5px">
          <!-- search for nci -->
          @include('common/nci_search')
          <!-- end of search -->
          <div class="row mission" style="margin-top:40px;">
          <h2 style="text-align:center">{{trans('auth.bcc_title')}}</h2>
            <h3 class="card-text" style="text-align:center">
            A basic cancer treatment centre is able to provide at least one cancer treatment modality either as a stand-alone 
facility (chemotherapy, radiotherapy or surgical oncology unit) or within the precincts of a hospital. In addition, it 
should also be able to offer prevention, screening, early detection, diagnosis, registration, treatment, palliative 
care and survivorship services. It is expected that this centre will be a facility at level 4 or above as per the Kenya 
Essential Package of Health (KEPH).
</h3>
          </div>
          <!-- start definition -->
          <div class="row mission" style="margin-top:40px;">
          <div style="background-color:white;text-align:center;margin-top:-30px;"><h4>Chemotherapy: Operational Considerations</h4></div>
          <div class="col-xl-2 col-lg-2-0 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
            <a href="{{url('/nci/books/chemoteraphy/considerations')}}"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.chemotherapy')}}
</h4></a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2-0 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <a href="#"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.radiotherapy')}}
</h4></a>
            
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2-0 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
            <a href="#"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.nuclear_radiology')}}
</h4></a>
            </div>
          </div>
        </div>
       
        <div class="col-xl-2 col-lg-2-0 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
            <a href="#"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.sugical_oncology')}}
</h4></a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2-0 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
            <a href="#"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.screening_information')}}
</h4></a>
            </div>
          </div>
        </div> 
          </div>
          <!-- end of Services offered in a basic cancer center-->
          <!--  Requirements for Establishing a Basic Cancer Management Center-->
          <div class="row mission" style="margin-top:40px;">
          <div style="background-color:white;text-align:center;margin-top:-30px;"><h4>{{trans('auth.requiremnt')}}</h4></div>
        <div class="col-xl-2 col-lg-3 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
            <a href="#"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.operational_consideration_requirement')}}
</h4></a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
              <a href="#"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.equipment_requirements')}}
</h4></a>
            
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
            <a href="#"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.Human_Resource_Requirements')}}
</h4></a>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-6 col-12 mb-4">
          <div class="card">
            <div class="card-body">
            <a href="#"><img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
    <h4 class="card-title management">{{trans('auth.Infrastructure_Requirements')}}
</h4></a>
            </div>
          </div>
        </div>

          </div>
          <!--  end Requirements for Establishing a Basic Cancer Management Center-->
          <!-- footer start -->
      @include('common/nci_footer')
      <!-- footer end -->
</div>
@stop