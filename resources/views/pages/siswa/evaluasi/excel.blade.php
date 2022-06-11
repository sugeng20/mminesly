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