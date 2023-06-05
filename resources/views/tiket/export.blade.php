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
    <h1>Data Tiket</h1>
    <table id="customers">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Waktu Transaksi</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($tiket as $tk)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $tk->nama_pembeli }}</td>
                    <td>{{ $tk->kota_asal }}</td>
                    <td>{{ $tk->kota_tujuan }}</td>
                    <td>{{ $tk->waktu_transaksi }}</td>
                    <td>{{ $tk->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>
</body>

</html>
