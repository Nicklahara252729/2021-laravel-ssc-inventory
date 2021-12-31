<script>
    demo = {

        initCharts: function() {

            /*  **************** Coloured Rounded Line Chart - Line Chart ******************** */


            dataColouredRoundedLineChart = {
                labels: ['\'06', '\'07', '\'08', '\'09', '\'10', '\'11', '\'12', '\'13', '\'14', '\'15'],
                series: [
                    [287, 480, 290, 554, 690, 690, 500, 752, 650, 900, 944]
                ]
            };

            optionsColouredRoundedLineChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 10
                }),
                axisY: {
                    showGrid: true,
                    offset: 40
                },
                axisX: {
                    showGrid: false,
                },
                low: 0,
                high: 1000,
                showPoint: true,
                height: '300px'
            };


            var colouredRoundedLineChart = new Chartist.Line('#colouredRoundedLineChart', dataColouredRoundedLineChart, optionsColouredRoundedLineChart);

            md.startAnimationForLineChart(colouredRoundedLineChart);


            /*  **************** Coloured Rounded Line Chart - Line Chart ******************** */


            dataColouredBarsChart = {
                labels: ['\'06', '\'07', '\'08', '\'09', '\'10', '\'11', '\'12', '\'13', '\'14', '\'15'],
                series: [
                    [287, 385, 490, 554, 586, 698, 695, 752, 788, 846, 944],
                    [67, 152, 143, 287, 335, 435, 437, 539, 542, 544, 647],
                    [23, 113, 67, 190, 239, 307, 308, 439, 410, 410, 509]
                ]
            };

            optionsColouredBarsChart = {
                lineSmooth: Chartist.Interpolation.cardinal({
                    tension: 10
                }),
                axisY: {
                    showGrid: true,
                    offset: 40
                },
                axisX: {
                    showGrid: false,
                },
                low: 0,
                high: 1000,
                showPoint: true,
                height: '300px'
            };


            var colouredBarsChart = new Chartist.Line('#colouredBarsChart', dataColouredBarsChart, optionsColouredBarsChart);

            md.startAnimationForLineChart(colouredBarsChart);
        }

    }

    $(document).ready(function() {
        demo.initCharts();
    });

    function clearForm(key) {
        $('#'+key).modal('hide');
        $('#nama').val('');
        $('#kategori').val('');
        $('#jumlah').val('');
        $('#users_access_name').val('');
        $('#form-add-new-data').trigger("reset");
        $('#jenis_gudang').val("choose").trigger('change');
    }

    function showAtk() {
        $('#modalAtk').modal({
            backdrop: 'static',
            keyboard: false
        }, 'show');
    }

    function showKimia() {
        $('#modalKimia').modal({
            backdrop: 'static',
            keyboard: false
        }, 'show');
    }

    function showDokumen() {
        $('#modalDokumen').modal({
            backdrop: 'static',
            keyboard: false
        }, 'show');
    }

    $('#form-atk').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route("gudangAtk.saveData")}}',
            method: 'post',
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function(r) {
                if (r.icon == 'success') {
                    swal({
                        title: "Success",
                        icon: r.icon,
                        text: r.msg,
                        dangerMode: false,
                        buttons: {
                            confirm: "Ok",
                        }
                    }).then((ok) => {
                        clearForm();
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: r.icon,
                        text: r.msg,
                        icon: r.icon
                    });
                }
            }
        });
    });

    $('#form-dokumen').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route("gudangDokumen.saveData")}}',
            method: 'post',
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function(r) {
                if (r.icon == 'success') {
                    swal({
                        title: "Success",
                        icon: r.icon,
                        text: r.msg,
                        dangerMode: false,
                        buttons: {
                            confirm: "Ok",
                        }
                    }).then((ok) => {
                        clearForm();
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: r.icon,
                        text: r.msg,
                        icon: r.icon
                    });
                }
            }
        });
    });

    $('#form-kimia').on('submit', function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: '{{route("gudangKimia.saveData")}}',
            method: 'post',
            data: new FormData(this),
            dataType: "json",
            contentType: false,
            cache: false,
            processData: false,
            success: function(r) {
                if (r.icon == 'success') {
                    swal({
                        title: "Success",
                        icon: r.icon,
                        text: r.msg,
                        dangerMode: false,
                        buttons: {
                            confirm: "Ok",
                        }
                    }).then((ok) => {
                        clearForm();
                        window.location.reload();
                    });
                } else {
                    swal({
                        title: r.icon,
                        text: r.msg,
                        icon: r.icon
                    });
                }
            }
        });
    });
</script>