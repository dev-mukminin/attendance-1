<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Edit Jajaran Dekanat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Admin Panel - Edit Jajaran Dekanat FKOR UNS</h2>
        <div id="form-container"></div>
    </div>

    <script>
        const container = document.getElementById('form-container');

        async function fetchData() {
            const res = await fetch('connection.php');
            const data = await res.json();

            data.forEach(item => {
                const form = document.createElement('form');
                form.className = 'border p-4 mb-4 bg-white';
                form.enctype = 'multipart/form-data';
                form.innerHTML = `
                    <input type="hidden" name="id" value="${item.id}">
                    <div class="mb-3">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="${item.jabatan}" required>
                    </div>
                    <div class="mb-3">
                        <label>Bidang</label>
                        <input type="text" name="bidang" class="form-control" value="${item.bidang}" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="${item.nama}" required>
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="ADA" ${item.status === 'ADA' ? 'selected' : ''}>ADA</option>
                            <option value="TIDAK ADA" ${item.status === 'TIDAK ADA' ? 'selected' : ''}>TIDAK ADA</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Alasan (jika tidak ada)</label>
                        <input type="text" name="alasan" class="form-control" value="${item.alasan || ''}">
                    </div>
                    <div class="mb-3">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                        <p class="mt-2">Foto saat ini: <strong>${item.foto}</strong></p>
                        <img src="../public/img/${item.foto}" width='100'>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                `;

                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const formData = new FormData(form);

                    const response = await fetch('update.php', {
                        method: 'POST',
                        body: formData
                    });

                    const result = await response.json();
                    alert(result.message);
                });

                container.appendChild(form);
            });
        }

        fetchData();
    </script>
</body>
</html> 
