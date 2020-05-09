<?php ?>
@extends('layouts.admin')

@section('content')


<div class="container-fluid">
            <div class="m-portlet m-portlet--mobile">
                        <div class="m-portlet__head">
                              <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                          <h3 class="m-portlet__head-text">
                                                Đăng Ký
                                          </h3>
                                    </div>
                              </div>
                              <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                          <li class="m-portlet__nav-item">
                                                				</li>
                                    </ul>
                              </div>
                        </div>
                        <div class="m-portlet__body">
                              <!--begin: Search Form -->
                              <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                              </div>
                              <!--end: Search Form -->

                              <!--begin: Datatable -->
                              <div class="m_datatable" id="child_data_ajax">

                                          <table class="data-table m-datatable__table">
                                                      <thead>
                                                          <tr>
                                                              <th>No</th>
                                                              <th>Name</th>
                                                              <th>Email</th>
                                                              <th>Phone</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                      </tbody>
                                                  </table>
                              </div>
                              <!--end: Datatable -->
                        </div>
                  </div>

</div>
@routes

<script type="text/javascript">
  $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
        ajax: "{{ route('lienhedk') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
        ]
    });



});
$(".alert").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert").slideUp(500);
});

</script>
    </div>
@endsection

@push('scripts')
@endpush

