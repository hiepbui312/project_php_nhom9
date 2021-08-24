<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div>
  <canvas id="myChart"></canvas>
</div>
<?php $now = strtotime(date('Y-m-d')); ?>
<input type="hidden" value="<?php echo  date('d/m', $now) ?>" id="now">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400) ?>" id="now1">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 2) ?>" id="now2">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 3) ?>" id="now3">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 4) ?>" id="now4">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 5) ?>" id="now5">
<input type="hidden" value="<?php echo  date('d/m', $now - 86400 * 6) ?>" id="now6">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d')) ? $this->modelGetThongKeByDay(date('Y-m-d'))->order_quantity : 0; ?>" id="order_quantity">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400))->order_quantity : 0; ?>" id="order_quantity1">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 2)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 2))->order_quantity : 0; ?>" id="order_quantity2">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 3)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 3))->order_quantity : 0; ?>" id="order_quantity3">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 4)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 4))->order_quantity : 0; ?>" id="order_quantity4">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 5)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 5))->order_quantity : 0; ?>" id="order_quantity5">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 6)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 6))->order_quantity : 0; ?>" id="order_quantity6">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d')) ? $this->modelGetThongKeByDay(date('Y-m-d'))->total_money : 0; ?>" id="total_money">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400))->total_money : 0; ?>" id="total_money1">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 2)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 2))->total_money : 0; ?>" id="total_money2">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 3)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 3))->total_money : 0; ?>" id="total_money3">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 4)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 4))->total_money : 0; ?>" id="total_money4">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 5)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 5))->total_money : 0; ?>" id="total_money5">
<input type="hidden" value=" <?php echo $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 6)) ? $this->modelGetThongKeByDay(date('Y-m-d', $now - 86400 * 6))->total_money : 0; ?>" id="total_money6">

<?php foreach($this->getCategory() as $row): ?>
  <input type="hidden" value="<?php echo $this->modelGetTongDoanhThu($row->id) ? $this->modelGetTongDoanhThu($row->id)->total_quantity : 0; ?>" id="total_quantity<?php echo $row->id ?>">
  <input type="hidden" value="<?php echo $row->name ?>" id="name_category<?php echo $row->id ?>">
<?php endforeach; ?>

<script>
  let now = document.querySelector("#now").value;
  let now1 = document.querySelector("#now1").value;
  let now2 = document.querySelector("#now2").value;
  let now3 = document.querySelector("#now3").value;
  let now4 = document.querySelector("#now4").value;
  let now5 = document.querySelector("#now5").value;
  let now6 = document.querySelector("#now6").value;
  let order_quantity = document.querySelector("#order_quantity").value;
  let order_quantity1 = document.querySelector("#order_quantity1").value;
  let order_quantity2 = document.querySelector("#order_quantity2").value;
  let order_quantity3 = document.querySelector("#order_quantity3").value;
  let order_quantity4 = document.querySelector("#order_quantity4").value;
  let order_quantity5 = document.querySelector("#order_quantity5").value;
  let order_quantity6 = document.querySelector("#order_quantity6").value;
  let total_money = document.querySelector("#total_money").value;
  let total_money1 = document.querySelector("#total_money1").value;
  let total_money2 = document.querySelector("#total_money2").value;
  let total_money3 = document.querySelector("#total_money3").value;
  let total_money4 = document.querySelector("#total_money4").value;
  let total_money5 = document.querySelector("#total_money5").value;
  let total_money6 = document.querySelector("#total_money6").value;
  let total_quantity1 = document.querySelector("#total_quantity1").value;
  let total_quantity3 = document.querySelector("#total_quantity3").value;
  let name_category1 = document.querySelector("#name_category1").value;
  let name_category3 = document.querySelector("#name_category3").value;

  const labels = [
    now6,
    now5,
    now4,
    now3,
    now2,
    now1,
    now,
  ];
  const data = {
    labels: labels,
    datasets: [{
      label: 'Đơn hàng',
      backgroundColor: 'blue',
      borderColor: 'blue',
      data: [order_quantity6, order_quantity5, order_quantity4, order_quantity3, order_quantity2, order_quantity1, order_quantity],
    }],
  };
  const config = {
    type: 'line',
    data: data,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Biểu đồ thống kê đơn hàng'
        }
      }
    },
  };
  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>


<!-- bieu do 2 -->
<div style="margin-top: 100px;">
  <canvas id="myChart2"></canvas>
</div>

<script>
  const data2 = {
    labels: [
      now6,
      now5,
      now4,
      now3,
      now2,
      now1,
      now,
    ],
    datasets: [{
      label: 'Doanh thu',
      data: [total_money6, total_money5, total_money4, total_money3, total_money2, total_money1, total_money],
      backgroundColor: ['blue'],
      borderColor: ['blue'],
      borderWidth: [1, 1, 1, 1, 1]
    }]
  };
  const config2 = {
    type: 'line',
    data: data2,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Biểu đồ thống kê doanh thu'
        }
      }
    },
  };
  var myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
  );
</script>



<!--bieu do 3 -->
<div style="width: 600px; margin-top: 100px; margin-left: 250px">
  <canvas id="myChart3"></canvas>
</div>

<script>
  const data3 = {
    labels: [
      name_category1, name_category3
    ],
    datasets: [{
      data: [total_quantity1, total_quantity3],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
      ],
      borderColor: ['White'],
      borderWidth: [1, 1]
    }]
  };
  const config3 = {
    type: 'doughnut',
    data: data3,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'top',
        },
        title: {
          display: true,
          text: 'Biểu đồ thống kê so sánh doanh thu theo danh mục sản phẩm'
        }
      }
    },
  };
  var myChart3 = new Chart(
    document.getElementById('myChart3'),
    config3
  );
</script>