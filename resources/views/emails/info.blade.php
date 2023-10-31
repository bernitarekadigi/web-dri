<!DOCTYPE html>
<html>

<head>
    <title>Info Dokumen</title>
</head>

<body>
    <h3>{{ $mailData['title'] }}</h3>

    <p>Berikut hasil PRD yang telah anda isikan pada website kami. Hasil dapat dibuka pada link dibawah ini</p>
    <p>{{ $mailData['url'] }}</p>
    {{-- <br> --}}
    <p>Terimakasih</p>
</body>

</html>
