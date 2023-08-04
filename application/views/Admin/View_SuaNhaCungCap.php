<?php require(__DIR__.'/layouts/header.php'); ?>

<?php if(isset($error) && !empty($error)){ ?>
<div style="position: fixed; top: 72px; z-index: 100000; right: 11px;opacity: 1;" class="toast fade show">
    <div class="toast-header">
        <strong class="mr-auto">Thông Báo</strong>
        <small>Có Lỗi Khi Thêm</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true" class="thoat">×</span>
        </button>
    </div>
    <div class="toast-body">
        <?php echo $error; ?>
    </div>
</div>
<?php } ?>

<?php if(isset($success) && !empty($success)){ ?>
<div style="position: fixed; top: 72px; z-index: 100000; right: 11px; opacity: 1;" class="toast">
    <div class="toast-header">
        <strong class="mr-auto">Thông Báo</strong>
        <small>Thành Công</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true" class="thoat">×</span>
        </button>
    </div>
    <div class="toast-body">
        <?php echo $success; ?>
    </div>
</div>
<?php } ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Nhà Cung Cấp</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/nha-cung-cap/'); ?>">Nhà Cung Cấp</a></li>
                            <li class="breadcrumb-item active">Cập Nhật Nhà Cung Cấp</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
</div> 


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Nhập thông tin nhà cung cấp</h4>
                    <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="simpleinput">Tên Nhà Cung Cấp</label>
                                            <input type="text" id="simpleinput" class="form-control tensanpham" placeholder="Tên chuyên mục" required name="tennhacungcap" value="<?php echo $detail[0]['TenNhaCungCap']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="simpleinput">Mô Tả</label>
                                            <textarea id="simpleinput" class="form-control" placeholder="Mô tả nhà cung cấp.." rows="5" required name="mota"><?php echo $detail[0]['MoTa']; ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Chuyên Mục</label>
                                            <select required class="form-control" id="exampleFormControlSelect1" name="chuyenmuc">
                                                <?php foreach ($category as $key => $value): ?>
                                                    <?php if($detail[0]['MaChuyenMuc'] == $value['MaChuyenMuc']){ ?>
                                                        <option value="<?php echo $value['MaChuyenMuc']; ?>" selected><?php echo $value['TenChuyenMuc']; ?></option>       
                                                    <?php }else{ ?>
                                                        <option value="<?php echo $value['MaChuyenMuc']; ?>"><?php echo $value['TenChuyenMuc']; ?></option>
                                                    <?php } ?>
                                                <?php endforeach ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Trạng Thái</label>
                                            <select required class="form-control" id="exampleFormControlSelect1" name="trangthai">
                                                <?php if($detail[0]['TrangThai'] == 1){ ?>
                                                    <option value="1" selected>Đang Cung Cấp</option>
                                                    <option value="2">Ngừng Cung Cấp</option>
                                                <?php }else if($detail[0]['TrangThai'] == 2){ ?>
                                                    <option value="1">Đang Cung Cấp</option>
                                                    <option value="2" selected>Ngừng Cung Cấp</option>
                                                <?php }else{ ?>
                                                    <option value="0" selected>Trong Thùng Rác</option>
                                                    <option value="1">Đang Cung Cấp</option>
                                                    <option value="2">Ngừng Cung Cấp</option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật Nhà Cung Cấp</button>
                                    </form>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card -->

                        </div>
                        </div>
                        
                    </div>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.close').click(function(){
            $(".toast").attr("style", "display: none;")
        })
    });
</script>
<?php require(__DIR__.'/layouts/footer.php'); ?>