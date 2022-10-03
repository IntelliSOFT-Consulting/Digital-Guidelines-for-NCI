@extends('layouts.simple')

@section('body')
@include('common/nci_custom_styles')
      <!-- <div class="container px-xl py-s">  -->
      <div class="mb-s" style="margin-right:20;margin-left:20%;">
        
    </div>
        <div style="margin:5px">
       <!-- start of types of cancer management centers  -->
      <div class="row mission">
      <div class="col-md-10">
      <div style="background-color:white;text-align:center;margin-top:-30px;"><h4>Cancer Management Centers level</h4></div>
     
     
           <div class="col-md-4">
           <div class="card" >
       <div class="card-body">
     <!-- <a href="{{ url('/nci/mlevel/cancer/center') }}"> -->
     <!-- <a href="" class="" data-entity-type="book" data-entity-id=""> -->
       <img class="images" src="{{ asset('/uploads/ccc.png') }}" alt="New york">
         <h4 class="card-title management">
         
     </h4>
     <!-- </a> -->
       </div>
     </div>
           </div>
          
      </div>
      <!-- <div class="col-md-4">
      <div class="card" >
  <div class="card-body"> -->
<!-- <a href="{{ url('/nci/comprehensive/cancer/center/') }}"> -->
  <!-- <img class="images" src="{{ asset('/uploads/mlcc.png') }}" alt="New york">
    <h4 class="card-title management">Comprehensive Cancer Center
</h4> -->
<!-- </a> -->
  <!-- </div>
</div>
      </div> -->
      <div class="col-md-2" style="background-color: #FBF4F4;">
    <div class="mb-xl">
        <h5>{{ trans('common.details') }}</h5>
        <div class="blended-links">
            
        </div>
    </div>

    <div class="actions mb-xl">
        <h5>{{ trans('common.actions') }}</h5>
        <div class="icon-list text-primary">

                <a href="" class="icon-list-item">
                    <span>@icon('add')</span>
                    <span>{{ trans('entities.pages_new') }}</span>
                </a>
                <a href="/nci/reqs/create-chapter"class="icon-list-item">
                    <span>@icon('add')</span>
                    <span>
                      {{ trans('entities.chapters_new') }}
                    </span>
                </a>

            <hr class="primary-background">

           
                <a href="" class="icon-list-item">
                    <span>@icon('edit')</span>
                    <span>{{ trans('common.edit') }}</span>
                </a>
               
                <a href="" class="icon-list-item">
                    <span>@icon('copy')</span>
                    <span>{{ trans('common.copy') }}</span>
                </a>
            
                <a href="" class="icon-list-item">
                    <span>@icon('lock')</span>
                    <span>{{ trans('entities.permissions') }}</span>
                </a>
          
            
                <a href="" class="icon-list-item">
                    <span>@icon('delete')</span>
                    <span>{{ trans('common.delete') }}</span>
                </a>

            <hr class="primary-background">

            
        </div>
    </div>
      </div>
      </div>
      
      

</div>
<!-- footer start -->
       @include('common/nci_footer')
      
       <!-- footer end  -->
     <!-- </div>  -->

    

@stop
