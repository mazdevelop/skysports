@extends('layouts.admin')
@section('content')
            <div class="grid grid-rows-4 md:grid-rows-2  grid-flow-col gap-4">
                <div class="w-full">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                مجموع پست ها
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    {{StrHelp::enToFa($postCount)}}
                                </div>
                                <i class='bx bx-chat'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="w-full">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                تعداد کاربران
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    {{StrHelp::enToFa($userCount) }}
                                </div>
                                <i class='bx bx-user'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="w-full">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                تعداد عکس ها
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    {{StrHelp::enToFa($photoCount) }}
                                </div>
                                <i class='bx bx-photo-album'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
                <div class="w-full">
                    <div class="box box-hover">
                        <!-- COUNTER -->
                        <div class="counter">
                            <div class="counter-title">
                                مجموع دسته بندی ها
                            </div>
                            <div class="counter-info">
                                <div class="counter-count">
                                    {{StrHelp::enToFa($categoryCount) }}
                                </div>
                                <i class='bx bx-category'></i>
                            </div>
                        </div>
                        <!-- END COUNTER -->
                    </div>
                </div>
            </div>
            <div class="grid grid-rows-2 md:grid-rows-1  md:grid-cols-2 grid-cols-1 gap-4 mt-3">
                <div class="w-full">
                    <!-- TOP PRODUCT -->
                    <div class="box f-height">
                        <div class="box-header">
                            آخرین کاربران
                        </div>
                        <div class="box-body">
                            
                            <ul class="product-list">
                                @foreach ($users as $user)
                                    <li class="product-list-item">
                                        <div class="item-info">
                                            <img src="{{$user->photo ? $user->photo->path : "http://placehold.it/400" }}"
                                                alt="">
                                            <div class="item-name">
                                                <div class="product-name">{{$user->name}}</div>
                                                <div class="text-second text-xs">{{$user->email}}</div>
                                            </div>
                                        </div>
                                        <div class="item-sale-info">
                                            <div class="text-second">ایجاد شده</div>
                                            <div class="product-sales direction-rtl text-xs">{{ StrHelp::enToFa(\Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran')))}}</div>
                                        </div>
                                    </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <!--END TOP PRODUCT -->
                </div>
                <div class="w-full">
                        <!-- CATEGORY CHAT -->
                        <div class="box f-height">
                            <div class="box-body">
                                <div id="category-chart"></div>
                            </div>
                        </div>
                        <!-- END CATEGORY CHAT -->
                </div>
            </div>
                <div class="row flex mt-3">
                    <div class="w-full">
                        <!-- CUSTOMER CHAT -->
                        <div class="box f-height">
                            <div class="box-header">
                                customer
                            </div>
                            <div class="box-body">
                                <div id="customer-chart"></div>
                            </div>
                        </div>
                        <!-- END CUSTOMER CHAT -->
                    </div>
                </div>
                <div class="row flex mt-3">
                    <div class="w-full">
                    <!-- ORDERS TABLE -->
                    <div class="box">
                        <div class="box-header">Recent order</div>
                        <div class="box-body overflow-scroll shadow  border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">شناسه</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">عنوان دسته بندی</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">تاریخ ایجاد</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                            <td class="px-2 text-xs">{{StrHelp::enToFa($category->id)}}</td>
                                            <td class="px-2 text-xs">{{$category->title}}</td>
                                            <td class="text-xs direction-rtl text-center">
                                                {{ StrHelp::enToFa(\Hekmatinasser\Verta\Verta::instance($category->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran')))}}
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END ORDERS TABLE -->
                </div>

            </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // CHART CUSTOMER

        let customer_options = {
            series: [{
                name: 'Store Customer',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'Online Customer',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
            colors: ['#F08FC0', '#DF5E5E'],
            chart: {
                height: 350,
                type: 'area'
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
            legend: {
                position: 'top'
            }
        };

        let customer_chart = new ApexCharts(document.querySelector("#customer-chart"), customer_options);
        customer_chart.render();

        // CHART CATEGORY

        let category_options = {
            series: [44, 55, 41, 17],
            label: ['Cloths', 'Devices', 'Bags', 'Watches'],
            chart: {
                width: 380,
                type: 'donut',
            },
            color: ['#6ab04c', '#2980b9', '#f39c12', '#d35400'],
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 270
                }
            },
            fill: {
                type: 'gradient',
            },
            legend: {
                formatter: function (val, opts) {
                    return val + " - " + opts.w.globals.series[opts.seriesIndex]
                }
            },
            title: {
                text: 'Gradient Donut with custom Start-angle'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        let category_chart = new ApexCharts(document.querySelector("#category-chart"), category_options);
        category_chart.render();

        // DARK MODE TOGGLE
        setDarkChart = (dark) => {
            let theme = {
                theme: {
                    mode: dark ? 'dark' : 'light'
                }
            }
            category_chart.updateOptions(theme)
            customer_chart.updateOptions(theme)
        }

        
        let darkmode_toggle = document.querySelector('#darkmode-toggle');
        darkmode_toggle.onclick = (e) => {
            e.preventDefault();
            document.querySelector('body').classList.toggle('dark');
            darkmode_toggle.querySelector('.darkmode-switch').classList.toggle('active');
            setDarkChart(document.querySelector('body').classList.contains('dark'))
        }
    </script>
@endsection