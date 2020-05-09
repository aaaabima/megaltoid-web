<a href="<?php echo BASE_URL."index.php?page=my_profile&module=banner&action=form"; ?>" class="btn btn-secondary my-3" role="button">+ Tambah Banner</a>

<?php       
    $queryBanner = mysqli_query($koneksi, "SELECT * FROM banner ORDER BY banner_id DESC");
        
    if (mysqli_num_rows($queryBanner) == 0){
        echo "<div class='alert alert-warning' role='alert'>Saat ini belum ada banner di dalam database!</div>";
    } else {
        echo "<div class='table-responsive'>
                <table class='table'>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>No</th>
                            <th scope='col'>Banner</th>
                            <th scope='col'>Link</th>
                            <th scope='col'>Status</th>
                            <th scope='col'>Action</th>
                        </tr>
                    </thead>
                    <tbody>";
        
        $no=1;
        while($rowBanner = mysqli_fetch_array($queryBanner)){
            echo "<tr>
					<th scope='row'>$no</th>
                        <td>$rowBanner[banner]</td>
                        <td><a target='blank' href='".BASE_URL."$rowBanner[link]'>$rowBanner[link]</a>
                        </td>
                        <td>$rowBanner[status]</td>
                        <td><a class='btn btn-sm btn-primary' href='".BASE_URL."index.php?page=my_profile&module=banner&action=form&banner_id=$rowBanner[banner_id]'>Edit</a>
					</td>
                </tr>";
                
            $no++;
        }
        echo "</tbody>
            </table>
            </div>";
    }
?>