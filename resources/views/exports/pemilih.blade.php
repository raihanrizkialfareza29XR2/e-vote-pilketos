<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Periode</th>
            <th>Status</th>
            <th>Kandidat Yang Dipilih</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $row)
            <tr>
                <td class="text-left">{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td class="text-left">{{ $row->periode }}</td>
                @if ($row->status == "2")
                    <td>Belum Voting</td>
                @else
                    <td>Sudah Voting</td>
                @endif
                <!-- @if (!empty($row->id_kandidat))
                    <td>{{ $row->kandidat->nama }}</td>
                @else
                    <td>Belum Memilih</td>
                @endif -->
                @if ($row->status == "2")
                    <td>Belum Voting</td>
                @else
                    <td>{{ $row->kandidat->nama }}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>