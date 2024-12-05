@extends('backend.app')

@section('title','Package')

@section('content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Basic Table</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Data Table</li>
            <li class="breadcrumb-item active">Basic Table</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header pb-0">
                <h4>Zero Configuration</h4><span>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</span>
            </div>
            <div class="card-body">
                <div class="table-responsive theme-scrollbar">
                <table class="display" id="basic-1">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Include</th>
                        <th>Exclude</th>
                        <th>Days</th>
                        <th>Package Now Valid Duration</th>
                        <th>Package Now Invalid</th>
                        <th>Package Photo</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                        <tr>
                            <td>{{$package->title}}</td>
                            <td>{{$package->details}}</td>
                            <td>{{$package->includes}}</td>
                            <td>{{$package->excludes}}</td>
                            <td>{{$package->days}}</td>
                            <td>{{$package->valid}}</td>
                            <td>{{$package->not_valid}}</td>
                            <td><img src="{{ asset($package->photo) }}" alt="Image" width="150px">
                            </td>
                            <td> 
                            <ul class="action"> 
                              
                                <li class="edit" > <a href="{{route('package.edit',['id' => $package->id])}}" class=""><i class="icon-pencil-alt"></i></a></li>
                                
                                <li class="delete delete-btn" data-id="{{ $package->id }}"><a href="#"><i class="icon-trash"></i></a></li>
                            </ul>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const itemId = this.getAttribute('data-id'); 
           
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    deleteItem(itemId);
                }
            });
        });
    });
    
    function deleteItem(itemId) {
      
        fetch(`/package/delete/${itemId}`, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire('Deleted!', 'The item has been deleted.', 'success');
                location.reload();  
            } else {
                Swal.fire('Error!', 'There was a problem deleting the item.', 'error');
            }
        })
        .catch(error => {
            Swal.fire('Error!', 'Something went wrong!', 'error');
        });
    }
</script>


@endpush