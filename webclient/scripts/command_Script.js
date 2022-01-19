function UpdateJadwal(id) {
    window.location = "?mn=jadwalEdit&uid=" + id;
}

function DeleteRencanaStudi(id) {
    let confirm = window.confirm("Delete Rencana Studi?");
    if (confirm) {
        window.location = "?mn=rencanadelete&delet=" + id;
    }
}