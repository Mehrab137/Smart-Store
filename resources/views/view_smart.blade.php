@extends('layout')
@section('content')

<p style="padding-top: 5%; font-size: 25px"><b>Here are the recorded Smart Things</b></p><br>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table id="smart_table" class="table table-bordered table-hover table-striped">
               
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Device Type</th>
                            <th>Brand Name</th>
                            <th>Model Name</th>
                            <th>Color</th>
                            <th>Avaibility</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    </tbody>   
                </table>
            </div>
        </div>
    </div>


@endsection

@push('js')

<script>

    $(document).ready( function () {
    $('#smart_table').DataTable({
        processing: true,
        serverside: true,

        ajax: "{{ route('view.smart.list') }}",

        columns: [
            {data: 'id' , name: 'id'},
            {data: 'type' , name: 'type'},
            {data: 'brand' , name: 'brand'},
            {data: 'model' , name: 'model'},
            {data: 'color' , name: 'color'},
            {data: 'avaibility' , name: 'avaibility'},
            {
                      data: 'action', 
                      name: 'action', 
                      orderable: true, 
                      searchable: true,
                  }
             ]
         });
    });

</script>
    
@endpush