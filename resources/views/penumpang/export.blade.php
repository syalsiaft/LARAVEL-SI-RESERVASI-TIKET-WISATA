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
    <h1>Data Penumpang</h1>
    <table id="customers">
        <thead>
            <tr class="text-center">
                <th scope="col">Id</th>
                <th scope="col">Id Pemesanan</th>
                <th scope="col">Nama Penumpang</th>
                <th scope="col">No Seat</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($penumpang as $pm)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $pm->id_pemesanan }}</td>
                    <td>{{ $pm->nama_penumpang }}</td>
                    <td>{{ $pm->no_seat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>
</body>

</html>
