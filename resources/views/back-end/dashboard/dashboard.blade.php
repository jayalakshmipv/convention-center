@extends('back-end.layouts.layout')

@section('title', 'Dashboard')

@section('body')

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['convention'] }}</h3>
                  <p>Convention Center</p>
                </div>
                <div class="icon">
                  <i class="fa fa-building-o"></i>
                </div>
                <a href="{{route('conventions.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['decorators'] }}</h3>
                  <p>Decorators</p>
                </div>
                <div class="icon">
                  <i class="fa fa-ge"></i>
                </div>
                <a href="{{route('decorators.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['carrental'] }}</h3>
                  <p>Car Rental</p>
                </div>
                <div class="icon">
                  <i class="fa fa-car"></i>
                </div>
                <a href="{{route('carrentals.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['studio'] }}</h3>
                  <p>Studio</p>
                </div>
                <div class="icon">
                  <i class="fa fa-camera"></i>
                </div>
                <a href="{{route('studio.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['caterers'] }}</h3>
                  <p>Caterers</p>
                </div>
                <div class="icon">
                  <i class="fa fa-cutlery"></i>
                </div>
                <a href="{{route('caterers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['jewellers'] }}</h3>
                  <p>Jewellers</p>
                </div>
                <div class="icon">
                  <i class="fa fa-diamond"></i>
                </div>
                <a href="{{route('jewellers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['invites'] }}</h3>
                  <p>Invites</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <a href="{{route('invites.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['giveaways'] }}</h3>
                  <p>Giveaways</p>
                </div>
                <div class="icon">
                  <i class="fa fa-car"></i>
                </div>
                <a href="{{route('giveaways.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['beautys'] }}</h3>
                  <p>Beauty & Grooming</p>
                </div>
                <div class="icon">
                  <i class="fa fa-cut"></i>
                </div>
                <a href="{{route('beauty.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['apparels'] }}</h3>
                  <p>Apparels</p>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-bag"></i>
                </div>
                <a href="{{route('apparels.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $count['entertainments'] }}</h3>
                  <p>Entertainments</p>
                </div>
                <div class="icon">
                  <i class="fa fa-music"></i>
                </div>
               <a href="{{route('entertainments.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			</div>

			<!--<div class="row">
			 <section class="content">
			 <div class="row email1">
			 <div class="box box-info ">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title">Quick Email</h3>
                  <!-- tools box -->
                 <!-- <div class="pull-right box-tools">
                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                  </div><!-- /. tools -->
               <!-- </div>
              <!--  <div class="box-body">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" name="emailto" placeholder="Email to:"/>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </form>
                </div></div>
				</div>
				</section>-->
				
		  @endsection