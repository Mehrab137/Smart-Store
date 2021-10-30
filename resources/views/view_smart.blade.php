@extends('layout')
@section('content')

<p style="padding-top: 5%; font-size: 25px"><b>Here are the recorded Smart Things</b></p><br>
    <div class="row">
        <div class="col">
            <table id="smart_table" class="table table-bordered table-hover table-striped table-responsive">
               
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Device Type</th>
                            <th>Brand Name</th>
                            <th>Model Name</th>
                            <th>Color</th>
                            <th>Avaibility</th>
                        </tr>
                    </thead>

                <tbody>

                @foreach ($smarts as $smart )
                <tr>
                    <td>{{ $smart->id }}</td>
                    <td>{{ $smart->type }}</td>
                    <td>{{ $smart->brand }}</td>
                    <td>{{ $smart->model }}</td>
                    <td>{{ $smart->color }}</td>
                    <td>{{ $smart->avaibility }}</td>
                </tr>
                 
                @endforeach

            </tbody>   
         </table>
        </div>
    </div>


@endsection

@push('js')

<script>

    $(document).ready( function () {
    $('#smart_table').DataTable();
} );

</script>
    
@endpush