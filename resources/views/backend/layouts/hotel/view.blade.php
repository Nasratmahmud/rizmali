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
            <li class="breadcrumb-item active">Hotel List</li>
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
                {{-- <h4>Zero Configuration</h4><span>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</span> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive theme-scrollbar">
                <table class="display" id="basic-1">
                    <thead>
                    <tr>
                        <th>Hotel</th>
                        <th>#</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($hotels as $hotel)
                        <tr>
                            <td>{{$package->name}}</td>
                            <td> 
                            <ul class="action"> 
                              
                                <li class="edit" > <a href="{{route('hotel.edit',['id' => $hotel->id])}}" class=""><i class="icon-pencil-alt"></i></a></li>
                                
                                <li class="delete delete-btn" data-id="{{ $hotel->id }}"><a href="#"><i class="icon-trash"></i></a></li>
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
      
        fetch(`/hotel/delete/${itemId}`, {
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