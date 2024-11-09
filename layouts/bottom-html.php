</main>
</div>

<!-- import bootstap javascript -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/chart.js"></script>
<script>
    const arrayOfMonth = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    const ctx = document.getElementById('myChart');
    const ctx1 = document.getElementById('myChart1');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: 'Jumlah Warna',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
    new Chart(ctx1, {
        type: 'line',
        data: {
            labels: arrayOfMonth,
            datasets: [{
                label: 'Jumlah Pekerjaan',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>
</body>

</html>