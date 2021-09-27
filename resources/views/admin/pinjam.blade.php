@extends('admin.tempadmin')

@section('title', 'Dasboard')

@section('content')

@if (session('status'))
<div class="col-lg-12 col-md-12 col-sm-12">
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('status') }}
        </div>
</div>
@endif

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="panel panel-default">
    <div class="panel-heading">
    	<h2>Stok Barang Tersedia</h2>
	  </div>
  </div>
  <div class="panel-body" style="overflow-x: scroll;">
  <div>
  <table class="Table table-striped table-advance table-hover" id="Table">
<thead>
<tr style="font-weight: bold;color:white;background-color:#2A3F54;">

    <th>No</th>
    <th>Nama Barang</th>
    <th>jumlah</th>
    <th class="text-center">Jenis</th>
		<th>Stok tersedia</th>
    <th class="text-center">Aksi</th>

</tr>
</thead>

<tbody>
@php
  $no = 0;
@endphp
@foreach($invent as $invent)
<tr style="background-color:white">
<td>{{ ++$no }}</td>
<td>{{ $invent->nama}}</td>
<td>{{ $invent->jumlah + $invent->pinjam}} Barang</td>
<td>{{ $invent->nama_jenis}}</td>
<td>{{ $invent->jumlah}} Barang</td>
<td class="text-center">
@if($invent->jumlah!=0)
<button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#exampleModal{{ $invent->id_inven }}" data-toggle="tooltip" data-placement="top" title="Edit"></button>
              <div class="modal fade" id="exampleModal{{ $invent->id_inven }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content text-left ">
                    <div class="modal-header">
                      <h3 class="modal-title" id="exampleModalLabel">Pinjam Barang
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button><h3>
                    </div>
                    <div class="modal-body">
                    <form id="demo-form2" action="{{url('/pinjamya')}}/{{$invent->id_inven}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
<div class="form-group">
           <label class="control-label ">Kategori Barang</label><br>
           <input id="jumlah" class="form-control col-md-7 col-xs-12" value="{{ $invent->nama_jenis}}" type="text" disabled name="jenis" style="width:550px"><br>
  <input type="text" value="{{ $invent->id_inven }}" name="inven" id="inven" hidden>
  <label class="control-label">Nama Barang</label>
     <input id="jumlah" class="form-control col-md-7 col-xs-12" value="{{ $invent->nama }}" disabled type="text" name="barang" style="width:550px">
   </div>
 <div class="form-group">
   <label for="middle-name" class="control-label">Jumlah</label>
     <input id="stokk" class="form-control col-md-7 col-xs-12" type="number" name="stokk" style="width:550px" >
 </div>
 <div class="form-group">
   <label for="middle-name" class="control-label">Tanggal Peminjaman</label><br>
   <input id="date" class="form-control col-md-7 col-xs-12" type="date" name="date" style="width:550px" required>
 </div>
 <div class="form-group">
   <label for="middle-name" class="control-label">Keterangan</label><br>
     <textarea name="keterangan" id="keterangan" style="width:550px"></textarea>
 </div>
 <div class="form-group">
   <label for="middle-name" class="control-label">Pegawai Yang Menjaga</label>
   <select id="pegawai" name="pegawai" class="form-control" style="width:550px">
         <option disabled>---><---</option>
         @foreach($user as $us)
         @if($us->role_id!=3)
         <option value="{{ $us->id }}">{{ $us->username }}</option>
         @endif
         @endforeach
     </select>
 </div><br><br>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      {!!csrf_field()!!}
                    </div>
                  </div>
                </div>
              </div>
              </form>
      @elseif($invent->jumlah=0)
      
      @endif
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
        </div>

@endsection