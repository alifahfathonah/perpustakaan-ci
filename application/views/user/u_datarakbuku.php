<!DOCTYPE html>
<html>
<head>
    <title>Data Rak Buku </title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px; color:blue;"> <b><?php echo $judul; ?></b> </h2>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <hr>
                <tr>
                    <th>No </th>
                    <th>Kode Rak</th>
                    <th>Lokasi Rak</th>
                </tr>
              </thead>
              <tbody>
                    <?php
                        $offset = "";
                        if ($offset == "") { $i = 0; } else { $i = $offset; }
                        foreach ($rak_buku as $rak)
                        { 
                            $i++;
                    ?>
                            <tr> 
                                <td><?php echo $i; ?> </td>
                                <td><?php echo "$rak->kode_rak" ?></td> 
                                <td><?php echo "$rak->lokasi" ?></td>
                                
                            </tr>
                    <?php 
                        }
                    ?>

              </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>
</body>
</html>

