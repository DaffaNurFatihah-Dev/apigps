<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h1 style="text-align: center;">
                    <?= $title ?>
                </h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle">
                        <thead class="text-uppercase text-white" style="background: #441313;">
                            <tr>
                                <th>id</th>
                                <th>shift</th>
                                <th>device</th>
                                <th>location</th>
                                <th>component_code</th>
                                <th>m_counting</th>
                                <th>m_ok</th>
                                <th>m_not</th>
                                <th>p_ok</th>
                                <th>p_ok_not_cairan</th>
                                <th>status</th>
                                <th>target</th>
                                <th>component_name</th>
                                <th>id_inventory</th>
                                <th>p_not</th>
                                <th>special_case</th>
                                <th>no_batch</th>
                                <th>date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_moulding_component as $key => $value) { ?>
                                <tr style="text-align: center; height:1cm">
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value['shift'] ?></td>
                                    <td><?= $value['device'] ?></td>
                                    <td><?= $value['location'] ?></td>
                                    <td><?= $value['component_code'] ?></td>
                                    <td><?= $value['m_counting'] ?></td>
                                    <td><?= $value['m_ok'] ?></td>
                                    <td><?= $value['m_not'] ?></td>
                                    <td><?= $value['p_ok'] ?></td>
                                    <td><?= $value['p_ok_not_cairan'] ?></td>
                                    <td><?= $value['status'] ?></td>
                                    <td><?= $value['target'] ?></td>
                                    <td><?= $value['component_code'] ?></td>
                                    <td><?= $value['id_inventory'] ?></td>
                                    <td><?= $value['p_not'] ?></td>
                                    <td><?= $value['special_base'] ?></td>
                                    <td><?= $value['no_batch'] ?></td>
                                    <td><?= substr($value['date'], 0, 8) ?></td>
                                    <td><?= $value['updated_date'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
    // == aktifkan script dibawah ini untuk auto refresh page tiap 10 detik
    setTimeout(function() {
        window.location.reload(1);
    }, 10000); // satuan ms
</script>