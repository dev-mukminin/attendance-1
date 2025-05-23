<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kehadiran Dekanat FKOR UNS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .main {
            background-image: url("public/img/background.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            z-index: -1;
        }

        .glass {
            backdrop-filter: blur(8px);
            background: rgba(0, 0, 0, 0.5);
            border-radius: 2rem;
            padding: 2rem;
            margin-top: 8rem;
            margin-bottom: 3rem;
            width: 90%;
        }

        .top-bar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 5rem;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            z-index: 1000;
        }

        .logo {
            width: 70px;
            border-radius: 10px;
        }

        .title {
            font-size: 2rem;
            color: #fff;
            text-align: center;
            margin-bottom: 2rem;
            font-weight: 600;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 1.2rem;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.15);
            height: 100%;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        .glass-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 1rem;
            margin-right: 1rem;
            border: 2px solid white;
        }

        .glass-info h6 {
            font-weight: 700;
            margin-bottom: 0.25rem;
            color: #fff;
        }

        .glass-info small,
        .glass-info p {
            margin: 0;
            color: #eee;
            font-size: 0.9rem;
        }

        .status-btn {
            padding: 0.3rem 0.8rem;
            border-radius: 0.5rem;
            font-weight: bold;
            font-size: 0.85rem;
            margin-top: 0.6rem;
            border: none;
        }

        .btn-ada {
            background-color: #4CAF50;
            color: white;
        }

        .btn-tidak {
            background-color: #E53935;
            color: white;
        }
    </style>
</head>
<body>

<div class="main"></div>

<div class="top-bar">
    <img src="public/img/loguns.png" class="logo" alt="Logo Kiri">
    <img src="public/img/km-logo.png" class="logo" alt="Logo Kanan">
</div>

<div class="container glass">
    <div class="title">DEKANAT FKOR UNS</div>
    <div class="row g-4">
        <div class="col-12 col-md-6">
            <div class="glass-card">
                <img src="public/img/dekan2.jpg" class="glass-img" alt="Dekan">
                <div class="glass-info">
                    <h6>DEKAN</h6>
                    <p>Fakultas Keolahragaan</p>
                    <small>Prof. Dr. Sapta Kunta Purnama, M.Pd.</small><br>
                    <button class="status-btn btn-ada">ADA</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="glass-card">
                <img src="public/img/Picture2.jpg" class="glass-img" alt="Wakil Dekan">
                <div class="glass-info">
                    <h6>WAKIL DEKAN</h6>
                    <p>Bidang Akademik dan Penelitian</p>
                    <small>Dr. Rony Syaifullah, S.Pd., M.Pd.</small><br>
                    <button class="status-btn btn-tidak">TIDAK ADA</button>
                    <p class="mt-2 text-danger" style="font-size: 0.85rem;">
                        Alasan: Sedang mengikuti konferensi nasional di Jakarta.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="glass-card">
                <img src="public/img/Picture3.jpg" class="glass-img" alt="Wakil Dekan">
                <div class="glass-info">
                    <h6>WAKIL DEKAN</h6>
                    <p>Bidang Non Akademik</p>
                    <small>Dr. Islahuzzaman Nuryadin, S.Pd., M.Or.</small><br>
                    <button class="status-btn btn-ada">ADA</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="glass-card">
                <img src="public/img/Picture4.jpg" class="glass-img" alt="Wakil Dekan">
                <div class="glass-info">
                    <h6>WAKIL DEKAN</h6>
                    <p>Bidang Kemahasiswaan dan Alumni</p>
                    <small>Dr. Haris Nugroho, S.Pd., M.Or.</small><br>
                    <button class="status-btn btn-ada">ADA</button>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
