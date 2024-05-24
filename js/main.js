document.addEventListener('DOMContentLoaded', function() {
    const btnHitung = document.getElementById("btn-hitung")

    function hitungTotal(paket1, paket2, paket3, inputDurasi, inputOrang) {
        let total = (paket1 + paket2 + paket3) * inputDurasi * inputOrang
        return total
    }

    btnHitung.addEventListener("click", function(){
        const inputOrang = document.getElementById("jmlorg").value
        const inputDurasi = document.getElementById("durasi").value
        const cbPaket1 = document.getElementById("paket1").checked
        const cbPaket2 = document.getElementById("paket2").checked
        const cbPaket3 = document.getElementById("paket3").checked
        const inputTotal = document.getElementById("total")

        let paket1 = cbPaket1 ? 1000000 : 0
        let paket2 = cbPaket2 ? 1200000 : 0
        let paket3 = cbPaket3 ? 500000 : 0

        console.log(hitungTotal(paket1, paket2, paket3, inputDurasi, inputOrang));

        inputTotal.value = hitungTotal(paket1, paket2, paket3, inputDurasi, inputOrang)
    })

});
