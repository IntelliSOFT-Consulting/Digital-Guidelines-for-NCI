@extends('layouts.simple')

@section('body')
@include('common/nci_custom_styles')

<div style="margin:5px">
          <!-- search for nci -->
          <?php $i=0 ?>
          @include('common/nci_search')
          
          <!-- end of search -->
          <div class="row mission" style="margin-top:40px;">
          <table id="example bordered striped" class="display" style="width:100%">
        <thead>
            <tr><th>#No</th>
                <th>Facility</th>
                <th>County</th>
                <th>Designation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($centers as $center)
            <?php $i++;?>
            <tr>
              <td>{{$i}}</td>
                <td>{{$center->Facility}}</td>
                <td>{{$center->County}}</td>
                <td>{{$center->Designation}}</td>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" />
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );</script>