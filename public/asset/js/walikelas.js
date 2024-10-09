    document.addEventListener('DOMContentLoaded', function () {
        // Cari semua tombol edit
        var editButtons = document.querySelectorAll('.btn-edit');

        // Loop semua tombol
        editButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                // Ambil ID dari tombol yang ditekan
                var id = this.getAttribute('data-id');

                // Lakukan AJAX untuk mengambil data berdasarkan ID
                fetch(`/dashboard/walikelas/${id}/edit`)
                    .then(response => response.json())
                    .then(data => {
                        // Isi form modal dengan data yang didapat
                        document.getElementById('kelas').value = data.kelas;
                        document.getElementById('nama').value = data.nama;

                        // Update form action ke route update
                        document.querySelector('form').setAttribute('action', `/dashboard/walikelas/${id}`);
                    });
            });
        });
    });

