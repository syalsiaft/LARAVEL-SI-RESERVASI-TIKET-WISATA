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
    <h1>Data Pemesanan</h1>
    <table id="customers">
        <thead>
            <tr class="text-center">
                <th scope="col">Id Jadwal</th>
                <th scope="col">Id User</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Alamat Pembeli</th>
                <th scope="col">Email Pembeli</th>
                <th scope="col">No Telp Pembeli</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($pemesanan as $pm)
                <tr class="text-center">
                    <td>{{ $pm->id_jadwal }}</td>
                    <td>{{ $pm->id_user }}</td>
                    <td>{{ $pm->nama_pembeli }}</td>
                    <td>{{ $pm->alamat_pembeli }}</td>
                    <td>{{ $pm->email_pembeli }}</td>
                    <td>{{ $pm->no_telp_pembeli }}</td>
                    <td>{{ $pm->jumlah_tiket }}</td>
                    <td>{{ $pm->total_harga }}</td>
            @endforeach
        </tbody>
    </table>
    </table>
</body>

</html>
