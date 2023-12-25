@foreach ($pegawai as $pega)
<h1>{{ $pega->nama }}</h1>
<h1>{{ $pega->role->nama }}</h1>
@endforeach
