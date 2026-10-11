<?php
    $nama  = $_POST['nama']  ?? '';
    $nim   = $_POST['nim']   ?? '';
    $jk    = $_POST['jk']    ?? '-';
    $prodi = $_POST['prodi'] ?? '';
    $hobi  = $_POST['hobi']  ?? [];
    $pesan = $_POST['pesan'] ?? '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPILAN BUKU TAMU</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #3b5bdb, #4dabf7);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }

        .card {
            background: #ffffff;
            width: 100%;
            max-width: 520px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .card-header {
            background: #364fc7;
            color: #ffffff;
            padding: 22px 28px;
        }

        .card-header h3 {
            font-size: 22px;
            letter-spacing: 1px;
        }

        .card-header p {
            font-size: 13px;
            opacity: 0.85;
            margin-top: 4px;
        }

        .card-body {
            padding: 20px 28px 28px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px 6px;
            font-size: 14px;
            color: #343a40;
            border-bottom: 1px solid #e9ecef;
            vertical-align: top;
        }

        td.label {
            width: 130px;
            font-weight: 600;
            color: #364fc7;
        }

        td.colon {
            width: 15px;
        }

        tr:last-child td {
            border-bottom: none;
        }

        ul {
            padding-left: 18px;
        }

        ul li {
            margin-bottom: 3px;
        }

        .btn-wrap {
            margin-top: 22px;
            text-align: right;
        }

        a.btn {
            display: inline-block;
            background: #364fc7;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: background 0.2s;
        }

        a.btn:hover {
            background: #2b3fa3;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3>ISI BUKU TAMU :</h3>
            <p>Terima kasih sudah mengisi buku tamu!</p>
        </div>

        <div class="card-body">
            <table>
                <tr>
                    <td class="label">Nama</td>
                    <td class="colon">:</td>
                    <td><?php echo htmlspecialchars($nama); ?></td>
                </tr>
                <tr>
                    <td class="label">NIM</td>
                    <td class="colon">:</td>
                    <td><?php echo htmlspecialchars($nim); ?></td>
                </tr>
                <tr>
                    <td class="label">Jenis Kelamin</td>
                    <td class="colon">:</td>
                    <td><?php echo htmlspecialchars($jk); ?></td>
                </tr>
                <tr>
                    <td class="label">Program Studi</td>
                    <td class="colon">:</td>
                    <td><?php echo htmlspecialchars($prodi); ?></td>
                </tr>
                <tr>
                    <td class="label">Hobi</td>
                    <td class="colon">:</td>
                    <td>
                        <?php
                        if (!empty($hobi)) {
                            echo "<ul>";
                            foreach ($hobi as $value) {
                                echo "<li>" . htmlspecialchars($value) . "</li>";
                            }
                            echo "</ul>";
                        } else {
                            echo "-";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="label">Pesan</td>
                    <td class="colon">:</td>
                    <td><?php echo nl2br(htmlspecialchars($pesan)); ?></td>
                </tr>
            </table>

            <div class="btn-wrap">
                <a class="btn" href="bukutamu.php">&larr; Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>