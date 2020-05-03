<?php
  include('dist/php/link_php.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title> CPWlibrary : ประกาศจากห้องสมุด</title>
    <?php
  include('dist/php/header.php');
?>

    <script>
    var element = document.getElementById("announcement");
    element.classList.add("active");
    </script>


    <div class="content-wrapper">
        <section class="content-header ">
            <h1>
                หน้าแผงสถิติเว็บไซต์
                <small>Dashboard</small>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UImodal">
                    จัดการหน้าเว็ปไซต์
                </button>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-database"></i>ฐานระบบห้องสมุด</a></li>
                <li><a href="#"><i class="fa  fa-eye"></i>ส่วนของผู้ควบคุมระบบ</a></li>
                <li class="active"><a href="#">หน้าแผงสถิติเว็บไซต์</a></li>
            </ol>
        </section>

        <section class="content">



            <div class="row">

                <div class="col-md-3">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>8</h3>

                            <p>รีพอร์ทวันนี้</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications-none"></i>
                        </div>
                        <a href="#" class="small-box-footer">ดูทั้งหมด <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>88</h3>

                            <p>ข้อความที่ยังไม่ได้ตอบ</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-notifications-off"></i>
                        </div>
                        <a href="#" class="small-box-footer">ดูทั้งหมด <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>18800</h3>

                            <p>จำนวนหนังสือทั้งหมด</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-book-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">ดูทั้งหมด <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>1800</h3>

                            <p>จำนวนสมาชิกทั้งหมด</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-people-outline"></i>
                        </div>
                        <a href="#" class="small-box-footer">ดูทั้งหมด <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>



                <section class="col-md-12 connectedSortable">
                    <div class="col-md-6">
                    <div class="nav-tabs-custom" style="cursor: move;">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-right ui-sortable-handle">
                            <li class=""><a href="#revenue-chart" data-toggle="tab"
                                    aria-expanded="false">รายการยืมล่าสุด</a></li>
                            <li class="active"><a href="#sales-chart" data-toggle="tab"
                                    aria-expanded="true">กำหนดคืน</a>
                            </li>
                            <li class="pull-left header"><i class="fa fa-table"></i> ตารางทำรายการ</li>

                        </ul>
                        <div class="tab-content no-padding">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane" id="revenue-chart"
                                style="position: relative; height: 315px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <table class="table table-striped" style="text-align:center">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10%">#</th>
                                            <th>ชื่อหนังสือ</th>
                                            <th>วันที่ยืม</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="chart tab-pane active" id="sales-chart"
                                style="position: relative; height: 315px;">
                                <div style="height: 400px; overflow: auto;">
                                    <table class="table table-striped" style="text-align:center;">
                                        <tbody>
                                            <tr>
                                                <th style="width: 10%">#</th>
                                                <th>ชื่อหนังสือ</th>
                                                <th>กำหนดคืน</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td>1.</td>
                                                <td>Update software</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>Clean database</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>Cron job running</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>Fix and squish bugs</td>
                                                <td>
                                                    <span class="badge bg-red">10.05.2020</span>
                                                </td>
                                                <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                            class="fa fa-search-plus"></i></button></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>



                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">

                        <div class="box box-solid bg-aqua-gradient ">
                            <div class="box-header ui-sortable-handle" style="cursor: move;"><b>
                                    <p class="">กราฟแสดงประเภทหนังสือ</p>
                                </b>
                            </div>

                            <div class="box-body ui-sortable-handle">

                                <div id="donut-chart" style="height: 311px;"></div>
                            </div>
                            <!-- /.box-body-->
                        </div>

                    </div>
                    <!--<div class="box box-solid">
                            <div class="box-header">
                                ตารางหนังสือที่มีการยืมล่าสุด
                            </div>
                             
                            <div class="box-body no-padding" style="text-align:center">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10%">#</th>
                                            <th>ชื่อหนังสือ</th>
                                            <th>วันที่ยืม</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                10.05.2020
                                            </td>
                                            <td><button type="button" class="btn btn-flat btn-xs btn-success"><i
                                                        class="fa fa-search-plus"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="box-footer clearfix">
                                <ul class="pagination pagination-sm no-margin pull-right">
                                    <li><a href="#">«</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>-->




<div class="col-md-6">
<div class="box box-solid bg-green-gradient" style="position: relative; left: 0px; top: 0px;">
                        <div class="box-header ui-sortable-handle" style="cursor: move;">
                            <i class="fa fa-calendar"></i>

                            <h3 class="box-title">Calendar</h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="fa fa-bars"></i></button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Add new event</a></li>
                                        <li><a href="#">Clear events</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">View calendar</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i
                                        class="fa fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body no-padding">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%">
                                <div class="datepicker datepicker-inline">
                                    <div class="datepicker-days" style="">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">April 2020</th>
                                                    <th class="next">»</th>
                                                </tr>
                                                <tr>
                                                    <th class="dow">Su</th>
                                                    <th class="dow">Mo</th>
                                                    <th class="dow">Tu</th>
                                                    <th class="dow">We</th>
                                                    <th class="dow">Th</th>
                                                    <th class="dow">Fr</th>
                                                    <th class="dow">Sa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="old day" data-date="1585440000000">29</td>
                                                    <td class="old day" data-date="1585526400000">30</td>
                                                    <td class="old day" data-date="1585612800000">31</td>
                                                    <td class="day" data-date="1585699200000">1</td>
                                                    <td class="day" data-date="1585785600000">2</td>
                                                    <td class="day" data-date="1585872000000">3</td>
                                                    <td class="day" data-date="1585958400000">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="day" data-date="1586044800000">5</td>
                                                    <td class="day" data-date="1586131200000">6</td>
                                                    <td class="day" data-date="1586217600000">7</td>
                                                    <td class="day" data-date="1586304000000">8</td>
                                                    <td class="day" data-date="1586390400000">9</td>
                                                    <td class="day" data-date="1586476800000">10</td>
                                                    <td class="day" data-date="1586563200000">11</td>
                                                </tr>
                                                <tr>
                                                    <td class="day" data-date="1586649600000">12</td>
                                                    <td class="day" data-date="1586736000000">13</td>
                                                    <td class="day" data-date="1586822400000">14</td>
                                                    <td class="day" data-date="1586908800000">15</td>
                                                    <td class="day" data-date="1586995200000">16</td>
                                                    <td class="day" data-date="1587081600000">17</td>
                                                    <td class="day" data-date="1587168000000">18</td>
                                                </tr>
                                                <tr>
                                                    <td class="day" data-date="1587254400000">19</td>
                                                    <td class="day" data-date="1587340800000">20</td>
                                                    <td class="day" data-date="1587427200000">21</td>
                                                    <td class="day" data-date="1587513600000">22</td>
                                                    <td class="day" data-date="1587600000000">23</td>
                                                    <td class="day" data-date="1587686400000">24</td>
                                                    <td class="day" data-date="1587772800000">25</td>
                                                </tr>
                                                <tr>
                                                    <td class="day" data-date="1587859200000">26</td>
                                                    <td class="day" data-date="1587945600000">27</td>
                                                    <td class="day" data-date="1588032000000">28</td>
                                                    <td class="day" data-date="1588118400000">29</td>
                                                    <td class="day" data-date="1588204800000">30</td>
                                                    <td class="new day" data-date="1588291200000">1</td>
                                                    <td class="new day" data-date="1588377600000">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="new day" data-date="1588464000000">3</td>
                                                    <td class="new day" data-date="1588550400000">4</td>
                                                    <td class="new day" data-date="1588636800000">5</td>
                                                    <td class="new day" data-date="1588723200000">6</td>
                                                    <td class="new day" data-date="1588809600000">7</td>
                                                    <td class="new day" data-date="1588896000000">8</td>
                                                    <td class="new day" data-date="1588982400000">9</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="datepicker-months" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">2020</th>
                                                    <th class="next">»</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7"><span class="month">Jan</span><span
                                                            class="month">Feb</span><span class="month">Mar</span><span
                                                            class="month focused">Apr</span><span
                                                            class="month">May</span><span class="month">Jun</span><span
                                                            class="month">Jul</span><span class="month">Aug</span><span
                                                            class="month">Sep</span><span class="month">Oct</span><span
                                                            class="month">Nov</span><span class="month">Dec</span></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="datepicker-years" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">2020-2029</th>
                                                    <th class="next">»</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7"><span class="year old">2019</span><span
                                                            class="year focused">2020</span><span
                                                            class="year">2021</span><span class="year">2022</span><span
                                                            class="year">2023</span><span class="year">2024</span><span
                                                            class="year">2025</span><span class="year">2026</span><span
                                                            class="year">2027</span><span class="year">2028</span><span
                                                            class="year">2029</span><span class="year new">2030</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="datepicker-decades" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">2000-2090</th>
                                                    <th class="next">»</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7"><span class="decade old">1990</span><span
                                                            class="decade">2000</span><span
                                                            class="decade">2010</span><span
                                                            class="decade focused">2020</span><span
                                                            class="decade">2030</span><span
                                                            class="decade">2040</span><span
                                                            class="decade">2050</span><span
                                                            class="decade">2060</span><span
                                                            class="decade">2070</span><span
                                                            class="decade">2080</span><span
                                                            class="decade">2090</span><span
                                                            class="decade new">2100</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="datepicker-centuries" style="display: none;">
                                        <table class="table-condensed">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="datepicker-title" style="display: none;">
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="prev">«</th>
                                                    <th colspan="5" class="datepicker-switch">2000-2900</th>
                                                    <th class="next">»</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="7"><span class="century old">1900</span><span
                                                            class="century focused">2000</span><span
                                                            class="century">2100</span><span
                                                            class="century">2200</span><span
                                                            class="century">2300</span><span
                                                            class="century">2400</span><span
                                                            class="century">2500</span><span
                                                            class="century">2600</span><span
                                                            class="century">2700</span><span
                                                            class="century">2800</span><span
                                                            class="century">2900</span><span
                                                            class="century new">3000</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="7" class="today" style="display: none;">Today</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="clear" style="display: none;">Clear</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
</div>
                    
                    
                    <div class="col-md-6">
                        <div class="box box-solid bg-aqua-gradient " style="cursor: move;">
                            <div class="box-header ui-sortable-handle" style="cursor: move;"><b>
                                    <p class="">กราฟแสดงประเภทสมาชิก </p>
                                </b>
                            </div>
                            <div class="box-body">

                                <div id="donut-chart1" style="height: 311px;"></div>
                            </div>
                            <!-- /.box-body-->
                        </div>
                    </div>
                </section>
                <!-- /.box-body -->
                <!-- <section class="col-md-5 connectedSortable " style="cursor: move;">


                </section>-->
            </div>
    </div>
    <!--<div class="col-md-12" style="">
                        <div class="box box-primary" style="width: 100%;">

                            <div class="box-body">
                                <p>สถิติการทำรายการ</p>
                                <div id="line-chart" style="height: 80px;"></div>
                            </div>
                            <!-- /.box-body
                        </div>
                    </div>-->














    </div>

    </section>




    <div class="modal fade " id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Default Modal</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="modal fade " id="UImodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">จัดการหน้าเว็ปไซต์</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- <iframe id="uploadtarget" name="uploadtarget" src="" style="width:0px;height:0px;border:0 ; display:none;"></iframe> -->
    </div>
    <?php include('dist/php/main_footer.php') ?>


    </div>

    <?php include('dist/php/link_js.php') ?>
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function(e) {
        if (!confirm('ท่านยืนยันที่จะลบประกาศข้อความนี้?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    } <
    script src = "bower_components/chart.js/Chart.js" >
    </script>
    <script src="bower_components/Flot/jquery.flot.js"></script>

    <script src="bower_components/Flot/jquery.flot.resize.js"></script>

    <script src="bower_components/Flot/jquery.flot.pie.js"></script>

    <script src="bower_components/Flot/jquery.flot.categories.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Date Picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <script>
    $(function() {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1)

            // Do a random walk
            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5

                if (y < 0) {
                    y = 0
                } else if (y > 100) {
                    y = 100
                }

                data.push(y)
            }

            // Zip the generated y values with the x values
            var res = []
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res
        }

        var interactive_plot = $.plot('#interactive', [getRandomData()], {
            grid: {
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: '#3c8dbc'
            },
            lines: {
                fill: true, //Converts the line chart to area chart
                color: '#3c8dbc'
            },
            yaxis: {
                min: 0,
                max: 100,
                show: true
            },
            xaxis: {
                show: true
            }
        })

        var updateInterval = 500 //Fetch data ever x milliseconds
        var realtime = 'on' //If == to on then fetch data every x seconds. else stop fetching
        function update() {

            interactive_plot.setData([getRandomData()])

            // Since the axes don't change, we don't need to call plot.setupGrid()
            interactive_plot.draw()
            if (realtime === 'on')
                setTimeout(update, updateInterval)
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === 'on') {
            update()
        }
        //REALTIME TOGGLE
        $('#realtime .btn').click(function() {
            if ($(this).data('toggle') === 'on') {
                realtime = 'on'
            } else {
                realtime = 'off'
            }
            update()
        })
        /*
         * END INTERACTIVE CHART
         */

        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var sin = [],
            cos = []
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)])
            cos.push([i, Math.cos(i)])
        }
        var line_data1 = {
            data: sin,
            color: '#3c8dbc'
        }
        var line_data2 = {
            data: cos,
            color: '#00c0ef'
        }
        $.plot('#line-chart', [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            lines: {
                fill: false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis: {
                show: true
            },
            xaxis: {
                show: true
            }
        })
        $.plot('#line-chart1', [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            lines: {
                fill: false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis: {
                show: true
            },
            xaxis: {
                show: true
            }
        })
        $.plot('#line-chart2', [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            lines: {
                fill: false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis: {
                show: true
            },
            xaxis: {
                show: true
            }
        })
        $.plot('#line-chart3', [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            lines: {
                fill: false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis: {
                show: true
            },
            xaxis: {
                show: true
            }
        })
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
            position: 'absolute',
            display: 'none',
            opacity: 0.8
        }).appendTo('body')
        $('#line-chart').bind('plothover', function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2)

                $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
                    .css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200)
            } else {
                $('#line-chart-tooltip').hide()
            }

        })
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
            [2, 88.0],
            [3, 93.3],
            [4, 102.0],
            [5, 108.5],
            [6, 115.7],
            [7, 115.6],
            [8, 124.6],
            [9, 130.3],
            [10, 134.3],
            [11, 141.4],
            [12, 146.5],
            [13, 151.7],
            [14, 159.9],
            [15, 165.4],
            [16, 167.8],
            [17, 168.7],
            [18, 169.5],
            [19, 168.0]
        ]
        $.plot('#area-chart', [areaData], {
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: '#00c0ef'
            },
            lines: {
                fill: true //Converts the line chart to area chart
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        })

        /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data: [
                ['January', 10],
                ['February', 8],
                ['March', 4],
                ['April', 13],
                ['May', 17],
                ['June', 9]
            ],
            color: '#3c8dbc'
        }
        $.plot('#bar-chart', [bar_data], {
            grid: {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor: '#f3f3f3'
            },
            series: {
                bars: {
                    show: true,
                    barWidth: 0.5,
                    align: 'center'
                }
            },
            xaxis: {
                mode: 'categories',
                tickLength: 0
            }
        })
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [{
                label: 'Series2',
                data: 30,
                color: '#3c8dbc'
            },
            {
                label: 'Series3',
                data: 20,
                color: '#0073b7'
            },
            {
                label: 'Series4',
                data: 50,
                color: '#00c0ef'
            }
        ]
        $.plot('#donut-chart', donutData, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0,
                    label: {
                        show: true,
                        radius: 1.8 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        })
        $.plot('#donut-chart1', donutData, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0,
                    label: {
                        show: true,
                        radius: 1.8 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        })
        /*
         * END DONUT CHART
         */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
            label +
            '<br>' +
            Math.round(series.percent) + '%</div>'
    }
    </script>
    </script>




    </body>

</html>