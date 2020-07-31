<?php /* Template Name: Dự báo */ ?>
<table border="1" cellpadding="5">
	<tr>
		<th>Thời gian</th>
		<th>Trạm</th>
		<th>Số liệu</th>
	</tr>
<?php  
	global $wpdb;
	$station_id = $_GET['station_id'];
	$update_time = $_GET['update_time'];
	$data = $wpdb->get_results("SELECT *, FROM_UNIXTIME(update_time, '%d-%m-%Y') as up_time FROM dubao WHERE FROM_UNIXTIME(update_time, '%d-%m-%Y') = '".$update_time."' AND station_id = '".$station_id."' GROUP BY FROM_UNIXTIME(update_time, '%d-%m-%Y')", OBJECT);
	foreach ($data as $value) {
		$dubao_value = json_decode($value->value);
		$tong = 0;
		foreach($dubao_value as $key => $v){
			if($key > 16 && $key < 89){
				$tong += $v->sens_sum_0_110005008;
?>
	<tr>
		<td><?php echo $value->station_id; ?></td>
		<td><?php echo $v->f_date; ?></td>
		<td><?php echo $v->sens_sum_0_110005008 ?></td>
	</tr>
<?php
			}
		}
	}
?>
</table>
<h1>
	Tổng lượng mưa 2 ngày gần nhất là : <?php echo $tong; ?>
</h1>