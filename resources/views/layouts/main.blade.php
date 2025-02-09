<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Inventaris Barang</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('templetes/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templetes/dist/css/adminlte.min.css') }}">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    .colored-toast.swal2-icon-success {
  background-color: #a5dc86 !important;
}

.colored-toast.swal2-icon-error {
  background-color: #f27474 !important;
}

.colored-toast.swal2-icon-warning {
  background-color: #f8bb86 !important;
}

.colored-toast.swal2-icon-info {
  background-color: #3fc3ee !important;
}

.colored-toast.swal2-icon-question {
  background-color: #87adbd !important;
}

.colored-toast .swal2-title {
  color: white;
}

.colored-toast .swal2-close {
  color: white;
}

.colored-toast .swal2-html-container {
  color: white;
}
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @yield('header')
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('templetes/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('templetes/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('templetes/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.24/jspdf.plugin.autotable.min.js"></script>
    <script>
  function exportPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF({
      orientation: 'landscape',
      unit: 'mm',
      format: 'a4'
    });

    // Judul PDF
    doc.setFontSize(18);
    doc.setTextColor(40);
    doc.setFont("helvetica", "bold");
    doc.text("Laporan Data Barang", 15, 15);

    // Ambil data tabel tanpa kolom "Aksi"
    const table = document.querySelector('.table');
    const headers = [];
    const rows = [];

    // Ambil header kecuali "Aksi"
    table.querySelectorAll('thead th').forEach((th, index) => {
      if (index !== 13) { // Kolom ke-13 adalah "Aksi"
        headers.push(th.innerText);
      }
    });

    // Ambil data setiap baris tanpa kolom "Aksi"
    table.querySelectorAll('tbody tr').forEach(tr => {
      const row = [];
      tr.querySelectorAll('td').forEach((td, index) => {
        if (index !== 13) {
          row.push(td.innerText);
        }
      });
      rows.push(row);
    });

    // Buat tabel di PDF
    doc.autoTable({
      head: [headers],
      body: rows,
      startY: 20,
      theme: 'grid',
      headStyles: { 
        fillColor: [41, 128, 185], 
        textColor: [255, 255, 255], 
        fontStyle: 'bold'
      },
      bodyStyles: { 
        textColor: [0, 0, 0], 
        fontSize: 10 
      },
      alternateRowStyles: { 
        fillColor: [245, 245, 245] 
      },
      margin: { top: 20 },
      styles: { 
        fontSize: 10,
        cellPadding: 3,
        valign: 'middle',
        halign: 'center'
      },
      columnStyles: {
        0: { halign: 'left' },
        1: { halign: 'left' }
      }
    });

    // Simpan PDF
    doc.save('data_barang.pdf');
  }
</script>
</body>
</html>
