// // Ubah Data
// $(function() {

//     $('.tombolTambahData').on('click', function() {

//         $('#judulModal').html('Tambah Data Mahasiswa');
//         $('.modal-footer button[type=submit]').html('Tambah Data');

//         $('#nama').val('');
//         $('#npm').val('');
//         $('#email').val('');
//         $('#jurusan').val('');
//         $('#id').val('');
//     });

//     $('.tampilModalUbah').on('click', function() {

//         $('#judulModal').html('Ubah Data Mahasiswa');
//         $('.modal-footer button[type=submit]').html('Ubah Data');
//         $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

//         const id = $(this).data('id');

//         $.ajax({
//             url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
//             data: { id: id },
//             method: 'POST',
//             dataType: 'json',
//             success: function(data) {
//                 $('#nama').val(data.nama);
//                 $('#npm').val(data.npm);
//                 $('#email').val(data.email);
//                 $('#jurusan').val(data.jurusan);
//                 $('#id').val(data.id);
//             }
//         });

//     });

//     // Tombol Delete
//     $('.tombol-hapus').on('click', function(e) {

//         e.preventDefault();

//         const href = $(this).attr('href');

//         Swal.fire({
//             title: 'Apakah anda yakin',
//             text: "Data Mahasiswa akan dihapus!",
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Hapus'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 document.location.href = href;
//             }
//         })

//     });

// });

console.log('HELLO');