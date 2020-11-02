
                        <div class="row" style="margin-top: 50px">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Tổng số đơn trong ngày</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between"
                                        style="text-align:center;">
                                        <strong
                                            class="small text-white stretched-link"><?php echo $OrderInDayDone ?></strong>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Tổng doanh thu trong ngày</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between"
                                        style="text-align:center;">
                                        <strong
                                            class="small text-white stretched-link"><?php echo number_format($ThuNhapTrongNgay, 0, '', ','); ?>
                                            VNĐ</strong>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Số sản phẩm trong tháng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between"
                                        style="text-align:center;">
                                        <strong
                                            class="small text-white stretched-link"><?php echo $OrderInMonthDone ?></strong>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Tổng doanh thu trong tháng</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between"
                                        style="text-align:center;">
                                        <strong
                                            class="small text-white stretched-link"><?php echo number_format($ThuNhapTrongThang, 0, '', ','); ?>
                                            VNĐ</strong>

                                    </div>
                                </div>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Thông kê 7 ngày gần nhất
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Thống kê 4 quý
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily =
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
        datasets: [{
            label: "Revenue",
            backgroundColor: "rgba(2,117,216,1)",
            borderColor: "rgba(2,117,216,1)",
            data: [4215, 5312, 6251, 7841, 9821, 14984, 14984, 14984, 14984, 14984, 14984, 14984],
        }],
    },
    options: {
        scales: {
            xAxes: [{
                time: {
                    unit: 'month'
                },
                gridLines: {
                    display: false
                },
                ticks: {
                    maxTicksLimit: 6
                }
            }],
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 15000,
                    maxTicksLimit: 5
                },
                gridLines: {
                    display: true
                }
            }],
        },
        legend: {
            display: false
        }
    }
});

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["<?php echo $data7daystoshow[6] ?>", "<?php echo $data7daystoshow[5] ?>", "<?php echo $data7daystoshow[4] ?>", "<?php echo $data7daystoshow[3] ?>", "<?php echo $data7daystoshow[2] ?>", "<?php echo $data7daystoshow[1] ?>", "<?php echo $data7daystoshow[0] ?>"],
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [<?php echo $data7daysvalue[6] ?>, <?php echo $data7daysvalue[5] ?>, <?php echo $data7daysvalue[4] ?>, <?php echo $data7daysvalue[3] ?>, <?php echo $data7daysvalue[2] ?>, <?php echo $data7daysvalue[1] ?>, <?php echo $data7daysvalue[0] ?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: <?php echo $max ?>,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});


                        </script>