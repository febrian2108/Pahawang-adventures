document.addEventListener('DOMContentLoaded', function() {
    // Menampilkan pesan ketika tidak ada data
    const tableBody = document.querySelector('table tbody');
    if (tableBody.children.length === 0) {
        const noDataRow = document.createElement('tr');
        const noDataCell = document.createElement('td');
        noDataCell.setAttribute('colspan', '4');
        noDataCell.classList.add('text-center');
        noDataCell.textContent = 'No records found';
        noDataRow.appendChild(noDataCell);
        tableBody.appendChild(noDataRow);
    }

    // Konfirmasi sebelum logout
    const logoutLink = document.querySelector('a[href="../logout.php"]');
    if (logoutLink) {
        logoutLink.addEventListener('click', function(event) {
            const confirmation = confirm('Are you sure you want to logout?');
            if (!confirmation) {
                event.preventDefault();
            }
        });
    }
});
