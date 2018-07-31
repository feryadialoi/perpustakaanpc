// <!-- ajax hapus anggota bootstrap modal -->

	$(document).ready(function(){

		$('.hapus_data_anggota').click(function(e){

			e.preventDefault();

			var pnis = $(this).attr('data-id');
			var parent = $(this).parent("td").parent("tr");

			bootbox.dialog({
			  message: "Anda yakin ingin menghapus?",
			  title: "<i class='material-icons'>delete</i> Hapus",
			  buttons: {
				danger: {
				  label: "Hapus",
				  className: "btn-danger",
				  callback: function() {

            $.ajax({
						  type: 'POST',
						  // url: '../hapusAnggota.php',
						  url: './page/anggota/hapus.php',
              data: {
                'nis': pnis
              }
					  })
					  .done(function(response){
						  bootbox.alert(response);
						  parent.fadeOut('slow');
					  })
					  .fail(function(){
						  bootbox.alert('Ada yang salah...');
					  })
				  }
				},
        success: {
				  label: "Batal",
				  className: "btn-primary",
				  callback: function() {
					 $('.bootbox').modal('hide');
				  }
				}
			  }
			});
		});
	});


// <!-- ajax hapus buku bootstrap modal -->

	$(document).ready(function(){

		$('.hapus_data_buku').click(function(e){

			e.preventDefault();

			var pisbn = $(this).attr('data-id');
			var parent = $(this).parent("td").parent("tr");

			bootbox.dialog({
			  message: "Anda yakin ingin menghapus?",
			  title: "<i class='material-icons'>delete</i> Hapus",
			  buttons: {
				danger: {
				  label: "Hapus",
				  className: "btn-danger",
				  callback: function() {

            $.ajax({
						  type: 'POST',
						  // url: '../hapusAnggota.php',
						  url: './page/buku/hapus.php',
              data: {
                'isbn': pisbn
              }
					  })
					  .done(function(response){
						  bootbox.alert(response);
						  parent.fadeOut('slow');
					  })
					  .fail(function(){
						  bootbox.alert('Ada yang salah...');
					  })
				  }
				},
        success: {
				  label: "Batal",
				  className: "btn-primary",
				  callback: function() {
					 $('.bootbox').modal('hide');
				  }
				}
			  }
			});
		});
	});


// <!-- ajax simpan edit anggota -->

  $(document).ready(function () {
    $('.simpan_edit_anggota').click(function () {
      event.preventDefault();

      var pnis = document.getElementById('nis_edit_anggota').value;
      var pnama = document.getElementById('nama_edit_anggota').value;
      var ptmp_lahir = document.getElementById('tmp_lahir_edit_anggota').value;
      var ptgl_lahir = document.getElementById('tgl_lahir_edit_anggota').value;
      var pjk = document.getElementById('jk_edit_anggota').value;
      var ptingkat = document.getElementById('tingkat_edit_anggota').value;
      var aksi = "<?php echo $_GET['aksi'];?>";

      $.ajax({
        type: 'POST',
        url: './page/anggota/simpan_edit.php',
        data: {
          'nis': pnis,
          'nama': pnama,
          'tmp_lahir': ptmp_lahir,
          'tgl_lahir': ptgl_lahir,
          'jk': pjk,
          'tingkat': ptingkat
        }
      });

      bootbox.dialog({
        message: "Data Berhasil Disimpan!",
        title: "<i class='glyphicon glyphicon-trash'></i> Simpan",
        buttons: {
          success: {
            label: "OK",
            className: "btn-success",
            callback: function() {
            $('.bootbox').modal('hide');

             window.location.href="?page=anggota";
            }
          }
        }
      });
    });
  });
// <!-- ajax simpan tambah anggota -->

  $(document).ready(function () {
    $('.simpan_tambah_anggota').click(function () {
      event.preventDefault();

      var pnis = document.getElementById('nis_tambah_anggota').value;
      var pnama = document.getElementById('nama_tambah_anggota').value;
      var ptmp_lahir = document.getElementById('tmp_lahir_tambah_anggota').value;
      var ptgl_lahir = document.getElementById('tgl_lahir_tambah_anggota').value;
      var pjk = document.getElementById('jk_tambah_anggota').value;
      var ptingkat = document.getElementById('tingkat_tambah_anggota').value;

      $.ajax({
        type: 'POST',
        // url: '../hapusAnggota.php',
        url: './page/anggota/simpan_tambah.php',
        data: {
          'nis': pnis,
          'nama': pnama,
          'tmp_lahir': ptmp_lahir,
          'tgl_lahir': ptgl_lahir,
          'jk': pjk,
          'tingkat': ptingkat
        }
      });

      bootbox.dialog({
        message: "Data Berhasil Disimpan!",
        title: "<i class='glyphicon glyphicon-trash'></i> Simpan",
        buttons: {
          success: {
            label: "OK",
            className: "btn-success",
            callback: function() {
            $('.bootbox').modal('hide');

             window.location.href="?page=anggota";
            }
          }
        }
      });
    });
  });


// <!-- ajax simpan edit buku -->

  $(document).ready(function () {
    $('.simpan_edit_buku').click(function () {
      event.preventDefault();
			var pisbn = document.getElementById('isbn_edit_buku').value;
      var pjudul = document.getElementById('judul_edit_buku').value;
      var ppengarang = document.getElementById('pengarang_edit_buku').value;
      var ppenerbit = document.getElementById('penerbit_edit_buku').value;
      var ptahun_terbit = document.getElementById('tahun_terbit_edit_buku').value;
      var pjumlah_buku = document.getElementById('jumlah_buku_edit_buku').value;
      var plokasi = document.getElementById('lokasi_edit_buku').value;
      // alert(pisbn);

      $.ajax({
        type: 'POST',
        // url: '../hapusAnggota.php',
        url: './page/buku/simpan_edit.php',
        data: {
					'isbn': pisbn,
          'judul': pjudul,
          'pengarang': ppengarang,
          'penerbit': ppenerbit,
          'tahun_terbit': ptahun_terbit,
          'jumlah_buku': pjumlah_buku,
          'lokasi': plokasi
        }
      });

      bootbox.dialog({
        message: "Data Berhasil Disimpan!",
        title: "<i class='glyphicon glyphicon-trash'></i> Simpan",
        buttons: {
          success: {
            label: "OK",
            className: "btn-success",
            callback: function() {
            $('.bootbox').modal('hide');

             window.location.href="?page=buku";
            }
          }
        }
      });

    });
  });

// <!-- ajax simpan tambah buku -->

  $(document).ready(function () {
    $('.simpan_tambah_buku').click(function () {
      event.preventDefault();
			var pisbn = document.getElementById('isbn_tambah_buku').value;
      var pjudul = document.getElementById('judul_tambah_buku').value;
      var ppengarang = document.getElementById('pengarang_tambah_buku').value;
      var ppenerbit = document.getElementById('penerbit_tambah_buku').value;
      var ptahun_terbit = document.getElementById('tahun_terbit_tambah_buku').value;
      var pjumlah_buku = document.getElementById('jumlah_buku_tambah_buku').value;
      var plokasi = document.getElementById('lokasi_tambah_buku').value;
      // alert(pisbn);

      $.ajax({
        type: 'POST',
        // url: '../hapusAnggota.php',
        url: './page/buku/simpan_tambah.php',
        data: {
					'isbn': pisbn,
          'judul': pjudul,
          'pengarang': ppengarang,
          'penerbit': ppenerbit,
          'tahun_terbit': ptahun_terbit,
          'jumlah_buku': pjumlah_buku,
          'lokasi': plokasi
        }
      });

      bootbox.dialog({
        message: "Data Berhasil Disimpan!",
        title: "<i class='glyphicon glyphicon-trash'></i> Simpan",
        buttons: {
          success: {
            label: "OK",
            className: "btn-success",
            callback: function() {
            $('.bootbox').modal('hide');

             window.location.href="?page=buku";
            }
          }
        }
      });

    });
  });
