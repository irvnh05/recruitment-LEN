<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h5>Laporan Return Periode ({{ $date[0] }} - {{ $date[1] }})</h5>
    <hr>
    <table width="100%" class="table-hover table-bordered">
        <thead>
            <tr>
                          <th>No KTP</th>
                          <th>Posisi</th>
                          <th>Program</th>
                          <th>Tgl Pengajuan</th>
                          <th>Status</th>
            </tr>
        </thead>
        <tbody>
     @forelse($berkas as $item)
                          <tr>
                              {{-- <td>{{ $item->id }}</td> --}}
                              <td>{{ $item->biodata->No_KTP }}</td>
                              <td>{{ $item->lowongan->posisi }}</td>
                              <td>{{ $item->lowongan->program->name }}</td>
                              <td>{{ $item->created_at->format('d-m-Y') }}</td>
                              {{-- <td>{{ $item->program->name }}</td> --}}
                              <td>{{ $item->status }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
        </tbody>
        <tfoot>
            <tr>
                {{-- <td colspan="2">Total</td>
                <td>Rp {{ number_format($total) }}</td>
                <td></td> --}}
            </tr>
        </tfoot>
    </table>
</body>
</html>
