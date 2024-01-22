$(function(){
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Add');
        $('#id_buku').val('');
        $('#kategori').val('');
        $('#nama_buku').val('');
        $('#harga').val('');
        $('#stok').val('');
        $('#penerbit').val('');
        $('#id').val('');
    });
    
    $('.tampilModalEdit').on('click', function(){
        
        $('#formModalLabel').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/toko/public/admin/ubah');
        $('.modal-footer button[type=submit]').html('Save');


       const id_buku = $(this).data('id_buku');
       
       $.ajax({
            url: 'http://localhost/toko/public/admin/getedit',
            data: {id_buku : id_buku},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id_buku').val(data.id_buku);
                $('#kategori').val(data.kategori);
                $('#nama_buku').val(data.nama_buku);
                $('#harga').val(data.harga);
                $('#stok').val(data.stok);
                $('#penerbit').val(data.penerbit);
                $('#id').val(data.id);
            }
       });
    });
});

$(function(){
    $('.tombolTambahData1').on('click', function(){
        $('#formModalLabel1').html('Tambah Data');
        $('.modalPenerbit form').attr('action', 'http://localhost/toko/public/admin/tambah1');
        $('.modalPenerbit form').attr('action', 'http://localhost/toko/public/admin/ubah1');
        $('.modalFooterPenerbit button[type=submit]').html('Add');
        $('#id_penerbit').val('');
        $('#nama').val('');
        $('#alamat').val('');
        $('#kota').val('');
        $('#telepon').val('');
        $('#id').val('');
    });
    
    $('.tampilModalEdit1').on('click', function(){
        $('#formModalLabel1').html('Edit Data');
        $('.modalFooterPenerbit button[type=submit]').html('Save');

        const id_penerbit = $(this).data('id_penerbit');
       
        $.ajax({
            url: 'http://localhost/toko/public/admin/getedit1',
            data: {id_penerbit: id_penerbit},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id_penerbit').val(data.id_penerbit);
                $('#nama').val(data.nama);
                $('#alamat').val(data.alamat);
                $('#kota').val(data.kota);
                $('#telepon').val(data.telepon);
                $('#id').val(data.id);
            }
        });
    });
});
