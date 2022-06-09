@extends('sb-admin/app')

@section('content')

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Withdrawal</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Deposite</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Action</th>
                <tbody>
                    @php
                       $no = 1 
                    @endphp
                    @foreach ($data as $d)
                    
                        
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->name_types }}</td>
                        <td>{{ $d->deposite }}</td>
                        <td>{{ $d->description }}</td>
                        <td>{{ $d->created_at }}</td>
                        <td>

                            <button type="button" class="btn btn-primary">Lihat</button>
                            {{-- <a href={{ url('/DeleteTransactions/'.$d->id) }}  type="button" class="btn btn-danger">Hapus</button> --}}
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
<!-- /.container-fluid -->

    
@endsection