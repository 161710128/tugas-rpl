@extends('layout.custom')
@section('konten')
<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Nama Siswa
						</th>
						<th>
							Kelas
						</th>
						<th>
							Jurusan
						</th>
					</tr>
				</thead>
				<tbody>
					@php $no=1; @endphp
					@foreach($a as $tab)
					<tr>
						<td>
							{{$no++}}
						</td>
						<td>
							{{$tab->nama}}
						</td>
						<td>
							{{$tab->kelas}}
						</td>
						<td>
							{{$tab->jurusan}}
						</td>
					</tr>
					@endforeach
					
				</body>
			</table> 
			@endsection