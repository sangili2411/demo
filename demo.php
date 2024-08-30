@extends('Common.Frontheader')
@section('content')


@if (session()->has('success'))
<script>
    alert('Update Successfully');
</script>
@endif

@if (session()->has('failure'))
<script>
    alert('Delete Successfully');
</script>
@endif
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<!-- <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Shop</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Customers</a></li>
					</ol>
                </div> -->
                <br><br><br><b><br><br>
            <div style="margin-left: 85%;">
                <a href="add_classes"><button type="button" class="btn btn-primary"><svg width=18 height=18 xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                  </svg>&nbsp;Add Content</button></a>
            </div>
            <div style="height:10px;"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" style="margin-left:17%;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0 table-striped student-tbl" >
                                        <thead>
                                            <tr>
                                            <th class="text-center">SNO</th>
                                           
                                                <th class="text-center">LOGO</th>
                                                <th class="text-center">HEADING</th>
                                                <th class="text-center">CONTENT</th>
                                                <th class="text-center">BANNER CONTENT</th>
                                                <th class="text-center">ACTION</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="customers">
                                            <?php $sno=0?>
                                            @foreach ($classes as $item)
                                            <?php $sno++;?>
                                            <tr class="btn-reveal-trigger">
                                            <td class="text-center">{{$sno}}</td>
                                               <td class="text-center">
                                                <img src="{{$item->logo}}" alt="" height="80" widh="80"></td>
                                               <td class="text-center">{{$item->heading}}</td>
                                               <td class="text-center"><?php echo"$item->content"; ?></td>
                                               <td class="text-center">
                                               <a href="banner_content{{$item->id}}"><i class="fa fa-eye"></i></a>

                                               </td>
                                               <td class="text-center">
                                                <a href="edit_classes{{$item->id}}"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                <a href="delete_classes{{$item->id}}"><i class="fa fa-trash"></i></a>
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
			@endsection