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
                        <li class="breadcrumb-item active" aria-current="page">List projects</li>
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
                            <form
                            action="{{route('search-project_by_name')}}"
                            method="GET" class="form-inline float-sm-right bg--white mb-2">
                            <div class="input-group has_append" style="width: 318px;">
                                <input type="text" name="project_name" class="form-control" placeholder="Enter Project Name"
                                    >

                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="search"><i class="fa fa-search"></i>Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row p-2" >
                        </div>   
                        <div class="row p-2">
                            <div class="col-12">
                                <div class="table-responsive" id="search_ajex" >
                                      <table id="example"  class="table table-striped table-bordered" style="width:99%">
                                        <thead>
                                            <tr>
                                                <th>Sr #</th>
                                                <th>Name</th>
                                                <th>Link</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i = 1)
                                            @foreach ($projects  as $project)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $project->project_name }}</td>

                                                <td>
                                                  <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a>
                                                  
                                                
                                                </td>
                                                <td>
                                              
                                                   {{ $project->description}}
                                                  
                                                  </td>
                                                <td>
                                                
                                                 <div class="d-flex order-actions">
                                                    <a href="project-edit?id={{ $project->id }}" class="ms-3"><i class='bx bxs-edit text-info'></i></a>
                                                    <a href="project-delete/{{ $project->id }}" class="ms-3"><i class='bx bxs-trash text-danger'></i></a>

                                                    </div>
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



{{-- ajex code --}}

    <script>
                                    
        $(document).ready(function() 
        {

            $('#search').on('click',function() {
                
                var project_name = $('#project_name').val();
               
        
                $.ajax({
                  
                    url: "{{ route('search-project_by_name') }}",
                    type: "get",
                    data: {
                      
                         project_name: project_name,
                        
                    },
                    success: function(response) {
                        // Handle the response and update the UI with the search results
                        
                        $("#search_ajex").html(response);

 

                        
                        
                      },
                         error: function(xhr, status, error) {
            
                    }
                });
                return false;
            });}
        </script>
@endsection