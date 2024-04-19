@extends('admin.main')


@section('content')
<div class="card card-primary mt-3">
    <div class="card-header">
        <h3 class="card-title">Area Chart</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="chart">
            <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                    <div class="">

                    </div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                    <div class="">

                    </div>
                </div>
            </div>
            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 349px;" width="436" height="312" class="chartjs-render-monitor"></canvas>
        </div>
    </div>    
</div>

@endsection
