<?php $__env->startSection('css'); ?>
<style>
/* .menu{
    background-color:red;
} */
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title">index</h4>
                            </li>
                            <li class="breadcrumb-item bcrumb-1">
                                <a href="../../index-2.html">
                                    <i class="fas fa-home"></i> Home</a>
                            </li>
                            <li class="breadcrumb-item active">index</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center bg-green">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="text m-b-10">عدد الذكور</div>
                        <h3 class="m-b-0">$1512
                            <i class="material-icons">trending_up</i>
                        </h3>
                        <small class="displayblock">21% Higher Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center bg-orange">
                        <div class="icon m-b-10">
                            <span class="chart chart-line"></span>
                        </div>
                        <div class="text m-b-10">عدد الاناث</div>
                        <h3 class="m-b-0">1236
                            <i class="material-icons">trending_up</i>
                        </h3>
                        <small class="displayblock">13% Highr Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center bg-cyan">
                        <div class="icon m-b-10">
                            <div class="chart chart-pie"></div>
                        </div>
                        <div class="text m-b-10">الذكور/الاناث</div>
                        <h3 class="m-b-0">1107
                            <i class="material-icons">trending_down</i>
                        </h3>
                        <small class="displayblock">34% Lower Than Average </small>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="support-box text-center bg-purple">
                        <div class="icon m-b-10">
                            <div class="chart chart-bar"></div>
                        </div>
                        <div class="text m-b-10">البطاله</div>
                        <h3 class="m-b-0">167
                            <i class="material-icons">trending_down</i>
                        </h3>
                        <small class="displayblock">06% Lower Than Average </small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">كبار السن</div>
                        <h3 class="m-b-10">$758
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">الاعاقه</div>
                        <h3 class="m-b-10">1025
                            <i class="material-icons col-red">trending_down</i>
                        </h3>
                        <div class="icon">
                            <span class="chart chart-line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">نسبه المتعلمين</div>
                        <h3 class="m-b-10">956
                            <i class="material-icons col-green">trending_up</i>
                        </h3>
                        <div class="icon">
                            <div class="chart chart-pie"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box text-center white">
                        <div class="text font-17 m-b-5">نسبه الشباب</div>
                        <h3 class="m-b-10">214
                            <i class="material-icons col-red">trending_down</i>
                        </h3>
                        <div class="icon">
                            <div class="chart" id="liveChart">Loading..</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>توزيع السكان على المحافظات</strong> </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="line-chart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>النمو السكاني</strong></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="bar-chart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Report</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="radar-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row ">
                <!-- هون -->
                <div class="col-lg-6">
                    <!-- <div class="card">
                        <div class="header">
                            <h2>
                                <strong>النمو السكاني</strong></h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="#" onClick="return false;">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#" onClick="return false;">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <canvas id="bar-chart1"></canvas>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="col-lg-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>توزيع السكان على المحافظات</strong> </h2>
                        </div>
                        <div class="body">
                            <div class="recent-report__chart">
                                <div id="chart7"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                
            </div>
            <!-- <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-green total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Total Sales</h3>
                                <p class="m-0">4000</p>
                            </div>
                        </div>
                        <div id="graph1" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-orange total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Visitors</h3>
                                <p class="m-0">3345</p>
                            </div>
                        </div>
                        <div id="graph2" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-cyan total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Orders</h3>
                                <p class="m-0">2364</p>
                            </div>
                        </div>
                        <div id="graph3" class="card-height-100"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card bg-purple total-card">
                        <div class="card-block">
                            <div class="text-center p-t-20">
                                <h3>Profit</h3>
                                <p class="m-0">$75,656</p>
                            </div>
                        </div>
                        <div id="graph4" class="card-height-100"></div>
                    </div>
                </div>
            </div> -->

                    
               
            </div>
        </div>
    </section>

    <script src="<?php echo e(asset('assets/js/bundles/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/charts/apexcharts.js')); ?>"></script>

     <!-- Echart Js -->
     <script src="<?php echo e(asset('assets/js/bundles/echart/echarts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/charts/echarts.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/pages/charts/chartjs.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/charts/flot.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script>
    //alert("Hala");
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Downloads\Final_STATISTICS_PALESTINE-main\resources\views/index.blade.php ENDPATH**/ ?>