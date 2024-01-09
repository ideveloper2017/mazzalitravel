@extends('layouts.admin') 

@section('styles')
@endsection   

@section('content')        
            <div class="wrap__right">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="panel panel-default admin">
                                <!-- Admin haeder start -->
                                <div class="panel-heading">
                                    <div class="admin__header">
                                        <div class="row reorder-xs align-items-center">
                                            <div class="col-xl-7 col-lg-5 col-md-5 col-sm-12 col-12">
                                                <div class="header__title">
                                                    <h3>Admin Dashboard</h3>
                                                </div>
                                            </div>

                                            @include('includes.notification')

                                        </div>   
                                    </div>
                                </div>
                                <!-- Admin haeder end -->

                                <!-- Quick list start -->
                                <div class="panel-body quick-list">
                                    <div class="quick-list-wrap">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ route('admin-service-index') }}" class="quick__box green mb-30">
                                                    <div class="icon"><i class="fas fa-paper-plane"></i></div>
                                                    <div class="number">{{$specialities}}</div>
                                                    <h4>Total Specialities!</h4>
                                                    <span class="quick__btn">View All</span>
                                                </a>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <a href="{{ route('admin-ad-index') }}" class="quick__box blue mb-30">
                                                    <div class="icon"><i class="fas fa-newspaper"></i></div>
                                                    <div class="number">{{$testimonials}}</div>
                                                    <h4>Total Testimonials!</h4>
                                                    <span class="quick__btn">View All</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quick list end -->
                            </div>

                            <!-- Top reference + Most Used OS start -->
                            <div class="reference-OS-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="panel panel-default chart mb-30">
                                            <div class="panel-heading">Top Referrals</div>
                                            <div class="panel-body">
                                                <div id="chartContainer-topReference"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="panel panel-default chart mb-30">
                                            <div class="panel-heading">Most Used OS</div>
                                            <div class="panel-body">
                                                <div id="chartContainer-os"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Top reference + Most Used OS end -->


                        </div>
                    </div>
                </div>
            </div>
@endsection


@section('scripts')

<script type="text/javascript">
    
    $(window).on('load', function() {

        // Pie chart topReference
        var chart = new CanvasJS.Chart("chartContainer-topReference",
        {
            exportEnabled: true,
            animationEnabled: true,
                legend: {
                    cursor: "pointer",
                    horizontalAlign: "right",
                    verticalAlign: "center",
                    fontSize: 16,
                    padding: {
                        top: 20,
                        bottom: 2,
                        right: 20,
                    },
                },
                data: [
                {
                    type: "pie",
                    showInLegend: true,
                    legendText: "",
                    toolTipContent: "{name}: <strong>{#percent%} (#percent%)</strong>",
                    indexLabel: "#percent%",
                    indexLabelFontColor: "white",
                    indexLabelPlacement: "inside",
                    dataPoints: [
                                @foreach($referrals as $browser)
                                    {y:{{$browser->total_count}}, name: "{{$browser->referral}}"},
                                @endforeach
                    ]
                }
                ]
            });
        chart.render();

        // Pie chart OS
        var chart = new CanvasJS.Chart("chartContainer-os",
        {
            exportEnabled: true,
            animationEnabled: true,
            legend: {
                cursor: "pointer",
                horizontalAlign: "right",
                verticalAlign: "center",
                fontSize: 16,
                padding: {
                    top: 20,
                    bottom: 2,
                    right: 20,
                },
            },
            data: [
            {
                type: "pie",
                showInLegend: true,
                legendText: "",
                toolTipContent: "{name}: <strong>{#percent%} (#percent%)</strong>",
                indexLabel: "#percent%",
                indexLabelFontColor: "white",
                indexLabelPlacement: "inside",
                dataPoints: [
                            @foreach($browsers as $browser)
                                {y:{{$browser->total_count}}, name: "{{$browser->referral}}"},
                            @endforeach
                ]
            }
            ]
        });
        chart.render();
        
    });

</script>
@endsection    