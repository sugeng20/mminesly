<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluasi</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <h1 class="text-center font-bold mb-3">Evaluasi</h1>
    <table class="border-separate  border w-full border-slate-300" style="border-spacing: 0px 0px">
        <tr>
            <th class="border border-slate-300 p-2">No</th>
            <th class="border border-slate-300 p-2">Nama Siswa</th>
            <th class="border border-slate-300 p-2">Skor</th>
        </tr>
        @php
        $no = 1;
        @endphp
        @forelse ($evaluations as $evaluation)
        <tr>
            <td class="border border-slate-300 px-4 py-2">{{ $no++ }}</td>
            <td class="border border-slate-300 px-4 py-2">{{ $evaluation->user->nama_depan }} {{
                $evaluation->user->nama_belakang }}</td>
            <td class="border border-slate-300 px-4 py-2">{{ $evaluation->score }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center border border-slate-300 py-4">Belum Ada Siswa yang mengerjakan</td>
        </tr>
        @endforelse
    </table>
</body>

</html>