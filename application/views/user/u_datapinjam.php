
    <title>Data Peminjaman</title>


<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h3> <?php echo $judul; ?> </h3>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <hr>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam (ID)</th>
                    <th>Judul Buku (ID)</th>
                    <th>Tanggal Pinjam </th>
                    <th>Tanggal Kembali</th>
                    <th>Lama Pinjam </th>
                    <th>Denda</th>
                    <th style="width:125px;">Status</th>
                    
                </tr>
              </thead>
              <tbody>
                    <?php
                        $offset = "";
                        if ($offset == "") { $i = 0; } else { $i = $offset; }
                        foreach ($peminjaman as $p) 
                        {
                            $i++;
                            $tgl_kembali = $p->tgl_kembali;
                            $kembali = $p->tgl_pinjam;
                            $cari_hari = abs(strtotime($kembali) - strtotime($tgl_kembali));
                            $hitung_hari = floor($cari_hari/(60*60*24));

                        ?>
                           <tr> 
                           <td><?php echo $i; ?></td>
                                <td><?php echo $p->nama; echo ' ('.$p->no_identitas.')'; ?></td>
                                <td><?php echo $p->judul_buku; echo ' ('.$p->id_buku.')'; ?></td>
                                <td><?php echo $p->tgl_pinjam; ?></td>
                                <td><?php echo $p->tgl_kembali; ?></td>
                                <td><?php echo $p->lama_pinjam; ?> </td>
                                <td> <?php echo $p->denda; ?> </td>
                                <td><?php echo $p->status; ?></td>
                            </tr>
                        <?php 
                            }
                        
                        ?>

              </tbody>
            </table>
        </div>
    </div>
</div>


<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>

