<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from kategori");

?>
<table class="table table-bordered" border="1">
	<tr>
		<td>Id Kategori</td>
		<td>Nama</td>
		<td colspan="4">Action</td>
	</tr>
<?php 
$no=1;
while($tampil=mysqli_fetch_array($query_view)){?>
	<tr>
		<td><?php echo $tampil['id_kategori'];?></td>
		<td><?php echo $tampil['nama'];?></td>
		<td><a href="edit_kategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>">Edit</a></td>
 			<td><a href="hapus_kategori.php?id_kategori=<?php echo $tampil['id_kategori'];?>">Hapus</a></td> 			
 		
	</tr>
<?php }?>
</table>