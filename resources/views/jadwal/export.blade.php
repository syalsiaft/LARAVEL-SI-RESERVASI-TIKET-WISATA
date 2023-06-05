<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #AD8E70;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Data Jadwal</h1>
    <table id="customers">
        <thead>
            <br />
            <tr>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Id Transportasi</th>
                <th scope="col">Jam Berangkat</th>
                <th scope="col">Jam Sampai</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($jadwal as $jadwal)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $jadwal->id }}</td>
                    <td> {{ $jadwal->kota_asal }}</td>
                    <td> {{ $jadwal->kota_tujuan }}</td>
                    <td>{{ $jadwal->id_transportasi }}</td>
                    <td>{{ $jadwal->jam_berangkat }}</td>
                    <td>{{ $jadwal->jam_sampai }}</td>
                    <td>{{ $jadwal->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>
</body>

</html>
