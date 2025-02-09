<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Inventaris Barang</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: auto; /* Biarkan gambar menyesuaikan lebarnya */
            max-width: 100px; /* Batasi lebar maksimum */
            height: auto; /* Biarkan tinggi menyesuaikan proporsi */
            display: block;
            margin: 0 auto; /* Tengahkan gambar */
        }
        .header h1 {
            margin: 10px 0;
            font-size: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{asset('image/Logo.jpg')}}" alt="Header Image">
        <h1>Inventaris Barang</h1>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Type</th>
                <th>No Sertifikat</th>
                <th>No Polisi</th>
                <th>No Rangka</th>
                <th>Asal Perolehan</th>
                <th>Tahun Pembelian</th>
                <th>Keadaan</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Penanggung Jawab</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
            <tr>
                <td>{{  $loop->iteration }}</td>
                <td>{{ $inventory->kode_barang }}</td>
                <td>{{ $inventory->nama_barang }}</td>
                <td>{{ $inventory->merk_tipe }}</td>
                <td>{{ $inventory->no_sertifikat_pabrik_chasis_mesin ?? '-' }}</td>
                <td>{{ $inventory->no_polisi ?? '-' }}</td>
                <td>{{ $inventory->no_rangka  ?? '-' }}</td>
                <td>{{ $inventory->asal_perolehan }}</td>
                <td>{{ $inventory->tahun_pembelian }}</td>
                <td>{{ $inventory->keadaan_barang_status }}</td>
                <td>{{ $inventory->jumlah_barang }}</td>
                <td>Rp {{ number_format($inventory->harga_barang, 0, ',', '.') }}</td>
                <td>{{ $inventory->employee->name }}</td>                                                                        
            </tr>
            @endforeach
    </tbody>
    </table>
        <div class="footer">
        <p>Dicetak pada: <span id="printDate"></span></p>
    </div>

    <script>
        document.getElementById('printDate').innerText = new Date().toLocaleDateString();
        window.print();
    </script>
</body>
</html>