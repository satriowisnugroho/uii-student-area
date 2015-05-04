{{--Created by PhpStorm.--}}
{{--User: Wisnu--}}
{{--Date: 03/05/2015--}}
{{--Time: 22:50--}}

<html>
<head>

</head>
<body>

<p><h3>Terima kasih telah melakukan pemesanan ruangan. </h3></p>
<b>NIM : </b>{{ $data[0]->nim }}<br/>
<b>NAMA : </b>{{ $data[0]->name }}<br/>
<b>TANGGAL : </b>{{ $data[0]->date }}<br/>
<b>WAKTU : </b>{{ $data[0]->time }}:00 - {{ $data[0]->time+1 }}:00<br/>
<b>RUANGAN : </b>{{ $data[0]->title }}<br/>
<b>JUMLAH ORANG : </b>{{ $data[0]->members }}<br/>
<b>AKTIVITAS : </b>{{ $data[0]->description }}<br/>
<p>Harap datang paling lambat 15 menit sebelum waktu pemesanan.</p>

</body>
</html>