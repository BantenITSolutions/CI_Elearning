<div id="bg-isi"><h2>Module Kategori Download - E-Learning STIKOM PGRI Banyuwangi</h2><br />
<a href="<?php echo base_url(); ?>index.php/admin/tambahupload"><div class="pagingpage"><b> + Tambah File / Upload File</b></div></a>
<a href="<?php echo base_url(); ?>index.php/admin/katdownload"><div class="pagingpage"><b> + Kategori Download</b></div><br /><br /></a>
<table width="520" bgcolor="#ccc" cellpadding="2" cellspacing="1" class="widget-small">
<tr bgcolor="#FFF" align="center"><td width="30"><strong>No.</strong></td><td><strong>Judul Kategori Download</strong></td><td colspan="2"><strong>Aksi</strong></td></tr>
<?php
$nomor=1;
foreach($kategori->result_array() as $b)
{
		if(($nomor%2)==0){
			$warna="#C8E862";
		} else{
			$warna="#D6F3FF";
		}
echo "<tr bgcolor='$warna'><td>".$nomor."</td><td>".$b["nama_kategori_download"]."</td><td width='20'><a href='".base_url()."index.php/admin/editkatdownload/".$b["id_kategori_download"]."' title='Edit'><img src='".base_url()."system/application/views/admin/images/edit-icon.gif' border='0'></a></td>
<td width='20'><a href='".base_url()."index.php/admin/hapuskatdownload/".$b["id_kategori_download"]."' onClick=\"return confirm('Anda yakin ingin menghapus kategori ini?')\" title='Hapus'><img src='".base_url()."system/application/views/admin/images/hapus-icon.gif' border='0'></a></td></tr>";
$nomor++;
}
?>
</table>
<a href="<?php echo base_url(); ?>index.php/admin/tambahkatdownload"><div class="pagingpage"><b> + Tambah Kategori download </b></div></a>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>