@extends('back-end.layouts.layout')

@section('title', 'List Category')

@section('body')

@include('flash')

<div class='col-md-offset-1 col-md-10'>
<div class="box box-primary">
    <div class="box-body">


        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width: 30%">Sl.No</th>
                    <th style="width: 30%">Name</th>
                  
                    <!--<th>Photo</th>-->
                    <th style="width: 5%">Edit</th>
                    <th style="width: 5%">Delete</th>
                </tr>
            </thead>
            <tbody>
            
                <?php $i=1 ?>
                @foreach( $category as $category )
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $category->category }}</td>
                    
                 <?php $i++ ?>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
    </div>
@endsection
@section('dataTable')
<script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>
@endsection