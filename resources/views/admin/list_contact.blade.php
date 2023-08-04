@extends("layouts.app")
@section("style")
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (Session::has('status'))
                            <div class="alert alert-{{ Session::get('status') }} border-0 bg-{{ Session::get('status') }} alert-dismissible fade show" id="dismiss">
                                <div class="text-white">{{ Session::get('message')}}</div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                                    {{ Session::forget('status') }}
                                    {{ Session::forget('message') }}
                            </div>
                            @endif
                    <div class="card-body">
                           <div class="d-lg-flex align-items-center mb-4 gap-3">
                                            <div class="ms-auto">

                                                <a href="{{ url('importantLinksAdd') }}" class="btn btn-outline-info px-3"><i class="bx bxs-plus-square"></i> Add New Links</a>

                                            </div>
                                        </div>
                                        <div class="row  mb-4">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Date From</label>
                                                    <input type="date" name="from" id="from" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Date To</label>
                                                    <input type="date" name="to" id="to" class="form-control">
                                                </div>
                                            </div>
                                      
                                            
                                            
                                            
                                            <div class="col-sm-3 ">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">&nbsp;</label>
                                                            <button onclick="validate()" type="button" name="search" id="search" class="form-control btn btn-info" ><i class="fadeIn animated bx bx-search"></i> Search</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="" class="form-label">&nbsp;</label>
                                                            <button onclick="reset()" type="button" name="reset" id="reset" class="form-control btn btn-danger"><i class="fadeIn animated bx bx-reset"></i>Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <div class="row p-2">
                            <div class="col-12">
                                <div class="table-responsive" id="responsiveDiv">
                                      <table id="example2"  class="table table-striped table-bordered" style="width:99%">
                                        <thead>
                                            <tr>
                                                <th>Sr #</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>city</th>
                                                <th>Date/Time</th>
                                                <th>Your Massage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($contacts  as $contact)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $contact->name }}</td>

                                                <td>
                                                  <a href="{{ $contact->email }}" target="_blank">{{ $contact->email }}</a>
                                                  
                                                
                                                </td>
                                                <td>
                                              
                                                   {{ $contact->phone}}
                                                  
                                                  </td>
                                                  <td>
                                              
                                                    {{ $contact->city}}
                                                   
                                                   </td>
                                                  <td>{{ $contact->created_at }}</td>
                                                   <td>
                                              
                                                    {{ $contact->your_massge}}
                                                   
                                                   </td>
                                                 

                                            </tr>
                                            @php($i++)
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection

@section("script")
    <script src="assets/plugins/smart-wizard/js/jquery.smartWizard.min.js"></script>
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

    <script>
    $(document).ready(function () {
            $('#example').DataTable();
    });

    </script>
      


<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable({

            buttons: ['copy', 'excel', 'pdf', 'print'],
            "info": false,
            sort: false,
            paging: false,
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
    });
</script>

<script>
    $(document).on('click', '.pagination-span a', function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('?')[1];
        ajex_date(page);
    });

    function reset(){
        $('select').prop('selectedIndex',0);
        $("input[type=number]").val('');
        $("input[type=text]").val('');
        $("input[type=date]").val('');
        ajex_date('page=1');
    }
    function validate(){
        ajex_date('page=1');
    }

    function ajex_date(page){
     
        let from = $("#from").val();
        let to = $("#to").val();
        
       
        $.ajax({
                url: "{{route('ajex_date')}}?"+page,
                method: 'GET',
                data: {
                    
                    from : from,
                    to : to,
                    
                   
                },
                success: function(result) {
                    $("#responsiveDiv").html(result);
                        ajex_date('page=1');    
                          var table = $('#example2').DataTable({

            buttons: ['copy', 'excel', 'pdf', 'print'],
            "info": false,
            sort: false,
            paging: false,
        });

        table.buttons().container()
            .appendTo('#example2_wrapper .col-md-6:eq(0)');
                }
            });
        }

</script>


        




@endsection