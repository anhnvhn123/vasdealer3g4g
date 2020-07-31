<?php
/*
 Plugin Name: donhang
 */
?>
<?php
    date_default_timezone_set("Asia/Bangkok");
	add_action( 'admin_menu', 'donhang' );
	function donhang(){
	    add_menu_page( 'don-hang', 'Đơn hàng', 'edit_others_posts', 'don-hang',  'show_donhang', 'dashicons-welcome-widgets-menus', 28 );
		// remove_menu_page('edit.php?post_type=page');
		remove_menu_page('upload.php');
		remove_menu_page('edit-comments.php');
		remove_menu_page('tools.php');
		remove_menu_page('index.php');
		remove_menu_page('profile.php');
	}
function show_donhang() {
    global $wpdb;
    if (isset($_POST['accept']))
    {
        if(isset($_POST['id_customer']))
        {
            $wpdb->get_results("UPDATE thongtinmuahang SET status = ".$_POST['status']." WHERE id = ".$_POST['id_customer']);
        }
    }
    if (isset($_POST['delete']))
    {
        if(isset($_POST['id_customer']))
        {
            $wpdb->get_results("DELETE FROM thongtinmuahang WHERE id = ".$_POST['id_customer']);
        }
    }
    $ds_donhang_chuaduyet = $wpdb->get_results("SELECT * FROM thongtinmuahang WHERE status = 0 ORDER BY timestamp DESC", OBJECT);
    $ds_donhang_daduyet = $wpdb->get_results("SELECT * FROM thongtinmuahang WHERE status = 1 ORDER BY timestamp DESC", OBJECT);

    ?>
	<h1>Danh sách đơn hàng chưa duyệt</h1>
	<div class="screen-width gio-hang-main">
		<table class="table" border="1" cellspacing="0" cellpadding="5">
			<tr>
				<th>STT</th>
				<th>Ngày mua</th>
				<th>Họ và tên</th>
				<th>Số điện thoại</th>
				<th>Email</th>
                <th>Địa chỉ</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
			</tr>
		<?php
            if (count($ds_donhang_chuaduyet)>0) {
                foreach ($ds_donhang_chuaduyet as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo date('H:i d/m/Y', strtotime($value->timestamp)); ?></td>
                        <td><?php echo $value->name; ?></td>
                        <td><b><?php echo $value->tel; ?></b></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->address; ?></td>
                        <td><b><?php echo $value->soluong; ?></b></td>
                        <td><b><?php echo $value->thanhtien; ?></b></td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id_customer" value="<?php echo $value->ID; ?>">
                                <input type="hidden" name="status" value="<?php echo(($value->status + 1) % 2); ?>">
                                <input type="submit" name="accept" value="Duyệt">
                                <input type="submit" name="delete" value="Xóa">
                            </form>
                        </td>
                    </tr>
                <?php
                }
            }
            else{
        ?>
                <tr>
                    <td colspan="10" align="center">Không có dữ liệu</td>
                </tr>
        <?php
                }
		?>
		</table>
	</div>
    <h1>Danh sách đơn hàng đã duyệt</h1>
    <div class="screen-width gio-hang-main">
        <table class="table" border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>STT</th>
                <th>Ngày mua</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>
            <?php
            if (count($ds_donhang_daduyet)>0) {
                foreach ($ds_donhang_daduyet as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo date('H:i d/m/Y', strtotime($value->timestamp)); ?></td>
                        <td><?php echo $value->name; ?></td>
                        <td><b><?php echo $value->tel; ?></b></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->address; ?></td>
                        <td><b><?php echo $value->soluong; ?></b></td>
                        <td><b><?php echo $value->thanhtien; ?></b></td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id_customer" value="<?php echo $value->ID; ?>">
                                <input type="hidden" name="status" value="<?php echo(($value->status + 1) % 2); ?>">
                                <input type="submit" name="accept" value="Bỏ duyệt">
                                <input type="submit" name="delete" value="Xóa">
                            </form>
                        </td>
                    </tr>
                <?php
                }
            }
            else{
                ?>
                <tr>
                    <td colspan="10" align="center">Không có dữ liệu</td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

	<?php
	}
?>