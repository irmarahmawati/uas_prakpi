                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            Aplikasi Blogger <small>Edit Data Barang</small>
                        </h2>
                    </div>
                </div> 
                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('posting/edit'); ?>
                                <input type="hidden" name="id" value="<?php echo $record['id_blog']?>">
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input class="form-control" name="judul" value="<?php echo $record['judul']?>">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" class="form-control">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->id_kategori'";
                                            echo $record['id_kategori']==$k->id_kategori?'selected':'';
                                            echo">$k->nama_kategori</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input class="form-control" name="deskripsi" value="<?php echo $record['deskripsi']?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Update</button> | 
                                <?php echo anchor('posting','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>
                </div>
                <!-- /. ROW  -->