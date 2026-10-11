<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUKU TAMU</title>
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
            padding: 26px 28px 30px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group > label,
        .form-label {
            display: block;
            font-weight: 600;
            font-size: 14px;
            color: #343a40;
            margin-bottom: 6px;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ced4da;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input[type="text"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #4c6ef5;
            box-shadow: 0 0 0 3px rgba(76, 110, 245, 0.2);
        }

        textarea {
            resize: vertical;
        }

        .option {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 6px;
            font-size: 14px;
            color: #495057;
            cursor: pointer;
        }

        .option input {
            accent-color: #364fc7;
            width: 16px;
            height: 16px;
        }

        .checkbox-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4px 10px;
        }

        .btn-wrap {
            text-align: right;
            margin-top: 24px;
        }

        button[type="submit"] {
            background: #364fc7;
            color: #ffffff;
            border: none;
            padding: 11px 30px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
        }

        button[type="submit"]:hover {
            background: #2b3fa3;
        }

        button[type="submit"]:active {
            transform: scale(0.97);
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h3>ISI BUKU TAMU!</h3>
            <p>Silakan isi data diri dan tinggalkan pesanmu di sini.</p>
        </div>

        <div class="card-body">
            <form action="proses_buku.php" method="POST">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap">
                </div>

                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM">
                </div>

                <div class="form-group">
                    <span class="form-label">Jenis Kelamin</span>
                    <label class="option">
                        <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                    </label>
                    <label class="option">
                        <input type="radio" name="jk" value="Perempuan"> Perempuan
                    </label>
                </div>

                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <select id="prodi" name="prodi">
                        <option value="Pendidikan Ilmu Komputer">Pendidikan Ilmu Komputer</option>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                    </select>
                </div>

                <div class="form-group">
                    <span class="form-label">Hobi</span>
                    <div class="checkbox-grid">
                        <label class="option">
                            <input type="checkbox" name="hobi[]" value="ngoding"> Ngoding
                        </label>
                        <label class="option">
                            <input type="checkbox" name="hobi[]" value="kepo"> Kepo
                        </label>
                        <label class="option">
                            <input type="checkbox" name="hobi[]" value="twitteran"> Twitteran
                        </label>
                        <label class="option">
                            <input type="checkbox" name="hobi[]" value="ngaji"> Ngaji
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesanmu di sini..."></textarea>
                </div>

                <div class="btn-wrap">
                    <button type="submit">Kirim</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>