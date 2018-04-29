<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
<h2>Dashboard</h2>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="box box-solid bg-green-gradient pull-left" style="width: 49%">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendário</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline"><div class="datepicker-days" style=""><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">April 2018</th><th class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day" data-date="1521936000000">25</td><td class="old day" data-date="1522022400000">26</td><td class="old day" data-date="1522108800000">27</td><td class="old day" data-date="1522195200000">28</td><td class="old day" data-date="1522281600000">29</td><td class="old day" data-date="1522368000000">30</td><td class="old day" data-date="1522454400000">31</td></tr><tr><td class="day" data-date="1522540800000">1</td><td class="day" data-date="1522627200000">2</td><td class="day" data-date="1522713600000">3</td><td class="day" data-date="1522800000000">4</td><td class="day" data-date="1522886400000">5</td><td class="day" data-date="1522972800000">6</td><td class="day" data-date="1523059200000">7</td></tr><tr><td class="day" data-date="1523145600000">8</td><td class="day" data-date="1523232000000">9</td><td class="day" data-date="1523318400000">10</td><td class="day" data-date="1523404800000">11</td><td class="day" data-date="1523491200000">12</td><td class="day" data-date="1523577600000">13</td><td class="day" data-date="1523664000000">14</td></tr><tr><td class="day" data-date="1523750400000">15</td><td class="day" data-date="1523836800000">16</td><td class="day" data-date="1523923200000">17</td><td class="day" data-date="1524009600000">18</td><td class="day" data-date="1524096000000">19</td><td class="day" data-date="1524182400000">20</td><td class="day" data-date="1524268800000">21</td></tr><tr><td class="day" data-date="1524355200000">22</td><td class="day" data-date="1524441600000">23</td><td class="day" data-date="1524528000000">24</td><td class="day" data-date="1524614400000">25</td><td class="day" data-date="1524700800000">26</td><td class="day" data-date="1524787200000">27</td><td class="day" data-date="1524873600000">28</td></tr><tr><td class="day" data-date="1524960000000">29</td><td class="day" data-date="1525046400000">30</td><td class="new day" data-date="1525132800000">1</td><td class="new day" data-date="1525219200000">2</td><td class="new day" data-date="1525305600000">3</td><td class="new day" data-date="1525392000000">4</td><td class="new day" data-date="1525478400000">5</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2018</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month focused">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year focused">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade focused">2010</span><span class="decade">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">47%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 47%;"></div>
                  </div>

                  <div class="clearfix" >
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">53%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 53%;"></div>
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>

        <!-- lista de afazeres -->
          <div class="box box-primary pull-right" style="width: 49%">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lista de afazeres</font></font></h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">«</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a></li>
                  <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">»</font></font></a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list ui-sortable">
                <li>
                  <!-- drag handle -->
                  <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Projetar um tema legal</font></font></span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 2 min</font></font></small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Faça o tema responsivo</font></font></span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 4 horas</font></font></small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deixe o tema brilhar como uma estrela</font></font></span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 1 dia</font></font></small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deixe o tema brilhar como uma estrela</font></font></span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 3 dias</font></font></small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Verifique suas mensagens e notificações</font></font></span>
                  <small class="label label-primary"><i class="fa fa-clock-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 1 semana</font></font></small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Deixe o tema brilhar como uma estrela</font></font></span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 1 mês</font></font></small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Adicionar Item</font></font></button>
            </div>
          </div>




          
<?php $__env->stopSection(); ?>

<div id="footer">
    <center  <div class="container">
        <p class="muted credit">Bem Vindo ao AdvSoft | Web,  Sistema de automação para escritórios de advocacia
            Vendas e Suporte 0800-09098</p></center>
      </div>
        
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>